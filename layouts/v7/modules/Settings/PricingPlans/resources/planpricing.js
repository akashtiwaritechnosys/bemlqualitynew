document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.querySelector(".toggle-switch input");
    const quarterlyLabel = document.querySelector(".toggle-label:nth-child(1)");
    const yearlyLabel = document.querySelector(".toggle-label:nth-child(3)");
    const priceElements = document.querySelectorAll(".plan-price");
    const selectButtons = document.querySelectorAll(".select-button");
    const planSection = document.getElementById("planSection");
    const summarySection = document.getElementById("summarySection");
    const backButton = document.getElementById("backButton");
    const payButton = document.getElementById("payButton");
    const stepPlan = document.getElementById("stepPlan");
    const stepSummary = document.getElementById("stepSummary");
    const stepProgress = document.getElementById("stepProgress");
    const stepPayment = document.getElementById("stepPayment");

    const currentSubscriptionBanner = document.getElementById("currentSubscriptionBanner");
    const upgradeInstructions = document.getElementById("upgradeInstructions");
    const upgradeSummary = document.getElementById("upgradeSummary");
    const upgradePaymentNote = document.getElementById("upgradePaymentNote");
    const upgradeModeBtn = document.getElementById("upgradeModeBtn");
    let selectedBaseTotal = 0;

    // Upgrade mode variables
    let currentSubscription = null;
    let upgradeMode = false;
    let upgradeCalculation = null;
    let originalSelectHandlers = new Map();
    forceMyAccountReload();

    // helper functions
    function isPlanUpgradeAllowed(currentPlan, selectedPlan) {
        const planHierarchy = {
            'Starter': 1,
            'Enterprise': 2
        };
        
        if (!currentPlan || !selectedPlan) return true;
        
        const currentLevel = planHierarchy[currentPlan];
        const selectedLevel = planHierarchy[selectedPlan];
        
        if (!currentLevel || !selectedLevel) return true;
        
        // Allow upgrade (starter to enterprise) but block downgrade (enterprise to starter)
        return selectedLevel >= currentLevel;
    }

    function isBillingUpgradeAllowed(currentBilling, selectedBilling) {
        const billingHierarchy = {
            'Quarterly': 1,
            'Yearly': 2
        };
        
        if (!currentBilling || !selectedBilling) return true;
        
        const currentLevel = billingHierarchy[currentBilling];
        const selectedLevel = billingHierarchy[selectedBilling];
        
        if (!currentLevel || !selectedLevel) return true;
        
        // Allow upgrade (quarterly to yearly) but block downgrade (yearly to quarterly)
        return selectedLevel >= currentLevel;
    }
    

    function validateUserCount(selectedUsers, currentUsers, isUpgrade, currentPlan, selectedPlan, currentBilling, selectedBilling) {
        if (!currentUsers || !isUpgrade) return { valid: true };
        
        const currentUserCount = parseInt(currentUsers);
        const selectedUserCount = parseInt(selectedUsers);
        
        console.log('Validation check:', {
            selectedUsers, currentUsers, currentPlan, selectedPlan, currentBilling, selectedBilling
        });
        
        // NEW: Special case for Enterprise Yearly - allow any user count
        const isEnterpriseYearly = selectedPlan && selectedPlan.includes('Enterprise') && selectedBilling === 'Yearly';
        
        // Allow any user count adjustment when changing billing cycle for same plan
        const isSamePlanBillingChange = currentPlan && selectedPlan && 
                                        getPlanType(currentPlan) === getPlanType(selectedPlan) && 
                                        currentBilling !== selectedBilling &&
                                        isBillingUpgradeAllowed(currentBilling, selectedBilling);
        
        // Allow same or higher user count when upgrading from Starter to Enterprise
        const isStarterToEnterprise = currentPlan && selectedPlan && 
                                        currentPlan.includes('Starter') && 
                                        selectedPlan.includes('Enterprise');
        
        // Allow user count adjustment for Enterprise quarterly to yearly upgrade
        const isEnterpriseBillingUpgrade = currentPlan && selectedPlan &&
                                            currentPlan.includes('Enterprise') && 
                                            selectedPlan.includes('Enterprise') &&
                                            currentBilling === 'Quarterly' && 
                                            selectedBilling === 'Yearly';
        
        console.log('Validation conditions:', {
            isEnterpriseYearly,
            isSamePlanBillingChange,
            isStarterToEnterprise,
            isEnterpriseBillingUpgrade
        });
        
        // NEW: Allow any user count for Enterprise Yearly
        if (isEnterpriseYearly) {
            console.log('Allowing any user count for Enterprise Yearly plan');
            return { valid: true };
        }
        
        // Allow user count decrement in these scenarios:
        if (isSamePlanBillingChange || isEnterpriseBillingUpgrade) {
            console.log('Allowing user count adjustment for billing change');
            return { valid: true };
        }
        
        if (selectedUserCount < currentUserCount) {
            return {
                valid: false,
                message: `Cannot reduce users from ${currentUserCount} to ${selectedUserCount}. You must maintain or increase user count when upgrading plans.`
            };
        }
        
        // Allow same user count for plan upgrades (Starter → Enterprise)
        if (selectedUserCount === currentUserCount && !isStarterToEnterprise && !isEnterpriseBillingUpgrade) {
            return {
                valid: false,
                message: `You have already purchased ${currentUserCount} users. To upgrade, please select at least ${currentUserCount + 1} users.`
            };
        }
        
        return { valid: true };
    }

    function getPlanType(planName) {
        if (!planName) return '';
        // Remove billing cycle from plan name to compare plan types
        return planName.replace(/\s*(Quarterly|Yearly|Plan)\s*$/, '').trim();
    }

    function updateStepProgress(currentStepIndex, totalSteps) {
        const percent = (currentStepIndex / (totalSteps - 1)) * 100;
        stepProgress.style.width = `${percent}%`;
    }

    function updateSteps(activeStep) {
        stepPlan.classList.remove("active", "completed");
        stepSummary.classList.remove("active", "completed");
        stepPayment.classList.remove("active", "completed");

        if (activeStep === "plan") {
            stepPlan.classList.add("active");
            updateStepProgress(0, 3);
        } else if (activeStep === "summary") {
            stepPlan.classList.add("completed");
            stepSummary.classList.add("active");
            updateStepProgress(1, 3);
        } else if (activeStep === "payment") {
            stepPlan.classList.add("completed");
            stepSummary.classList.add("completed");
            stepPayment.classList.add("active");
            updateStepProgress(2, 3);
        }
        
    }


    function hideSubscriptionBanner() {
        if (currentSubscriptionBanner) {
            currentSubscriptionBanner.style.display = 'none';
        }
        if (upgradeInstructions) {
            upgradeInstructions.style.display = 'none';
        }
    }

    function showSubscriptionBanner() {
        if (currentSubscription && currentSubscriptionBanner) {
            currentSubscriptionBanner.style.display = 'flex';
        }
        if (upgradeMode && upgradeInstructions) {
            upgradeInstructions.style.display = 'block';
        }
    }

    toggle.addEventListener("change", function () {
        const isYearly = this.checked;
        quarterlyLabel.classList.toggle("active", !isYearly);
        yearlyLabel.classList.toggle("active", isYearly);
        updatePrices();
        
        // Re-enable upgrade mode if it was active
        if (upgradeMode && currentSubscription) {
            // Check if the new billing selection is allowed
            const currentBilling = currentSubscription.subscription_frequency;
            const selectedBilling = isYearly ? 'Yearly' : 'Quarterly';
            const billingAllowed = isBillingUpgradeAllowed(currentBilling, selectedBilling);
            
            if (!billingAllowed) {
                app.helper.showErrorNotification({
                    message: `Cannot switch from ${currentBilling} to ${selectedBilling} billing. Please select Yearly billing to upgrade.`
                });
                // Revert the toggle
                this.checked = !isYearly;
                quarterlyLabel.classList.toggle("active", isYearly);
                yearlyLabel.classList.toggle("active", !isYearly);
                updatePrices();
                return;
            }
            
            setTimeout(() => enableUpgradeMode(), 100);
        }
    });


    function updatePrices() {
        const isYearly = toggle.checked;
        priceElements.forEach((priceEl) => {
            const usersInput = priceEl
                .closest(".plan-card")
                .querySelector(".user-input");
            const users = usersInput?.valueAsNumber || 1;

            const price = isYearly
                ? priceEl.dataset.yearPrice
                : priceEl.dataset.quarterPrice;
            const freq = isYearly
                ? priceEl.dataset.yearFreq
                : priceEl.dataset.quarterFreq;
            const total = users * parseFloat(price);
            priceEl.innerHTML = "₹" + total + " <span>/ " + freq + "</span>";
            
        });
    }

    document.querySelectorAll(".user-input").forEach((input) => {
        // Update on input change (typing)
        input.addEventListener("input", function () {
            if (this.value < parseInt(this.min)) {
                this.value = this.min;
            }
            if (this.value > parseInt(this.max)) {
                this.value = this.max;
            }
            updatePrices();

            if (upgradeMode && currentSubscription) {
                const currentUsers = parseInt(currentSubscription.company_size) || currentSubscription.no_of_users || 1;
                const currentPlan = currentSubscription.plan_name;
                const currentBilling = currentSubscription.subscription_frequency;
                const planCard = this.closest('.plan-card');
                const selectedPlan = planCard.querySelector('.select-button')?.dataset.subName;
                const isYearly = toggle.checked;
                const selectedBilling = isYearly ? 'Yearly' : 'Quarterly';
                
                const validation = validateUserCount(this.value, currentUsers, true, currentPlan, selectedPlan, currentBilling, selectedBilling);
                
                if (!validation.valid) {
                    this.style.borderColor = '#ff6b6b';
                    this.style.boxShadow = '0 0 0 2px rgba(255, 107, 107, 0.2)';
                } else {
                    this.style.borderColor = '';
                    this.style.boxShadow = '';
                }
            }
    
        });
        
        input.addEventListener("focus", function () {
            updatePrices();
        });
        
        input.addEventListener("mouseenter", function () {
            updatePrices();
        });
        
        const planCard = input.closest('.plan-card');
        if (planCard) {
            planCard.addEventListener('mouseenter', function() {
                updatePrices();
            });
        }
    });


    document.querySelectorAll(".arrow-btn").forEach((btn) => {
        btn.addEventListener("click", function () {
            const targetId = this.dataset.target;
            const input = document.getElementById(targetId);
            let value = input.valueAsNumber || 1;
            
            // Get minimum value based on upgrade mode
            const minValue = parseInt(input.min) || 1;

            if (this.classList.contains("up-arrow")) {
                input.value = value + 1;
            } else if (this.classList.contains("down-arrow")) {
                // Check if down arrow should be disabled
                const shouldDisable = input.dataset.disableDownArrow === 'true';
                
                if (shouldDisable && value <= minValue) {
                    // Don't allow reduction below minimum for Starter plans
                    if (upgradeMode && currentSubscription) {
                        app.helper.showErrorNotification({
                            message: `Cannot reduce below ${minValue} users for this upgrade`
                        });
                    }
                    return; // Exit without changing value
                }
                
                if (value > minValue) {
                    input.value = value - 1;
                }
            }
            
            // Validate in upgrade mode
            if (upgradeMode && currentSubscription) {
                const currentUsers = parseInt(currentSubscription.company_size) || currentSubscription.no_of_users || 1;
                const currentPlan = currentSubscription.plan_name;
                const currentBilling = currentSubscription.subscription_frequency;
                const planCard = input.closest('.plan-card');
                const selectedPlan = planCard.querySelector('.select-button')?.dataset.subName;
                const isYearly = toggle.checked;
                const selectedBilling = isYearly ? 'Yearly' : 'Quarterly';
            
                const validation = validateUserCount(input.value, currentUsers, true, currentPlan, selectedPlan, currentBilling, selectedBilling);
                
                if (!validation.valid) {
                    input.style.borderColor = '#ff6b6b';
                    input.style.boxShadow = '0 0 0 2px rgba(255, 107, 107, 0.2)';
                } else {
                    input.style.borderColor = '';
                    input.style.boxShadow = '';
                }
            }

            updatePrices();
        });
    });

    function setupSelectButtons() {
        selectButtons.forEach((btn) => {
            const originalHandler = function() {
                if (upgradeMode && btn.disabled) {
                    return;
                }

                clearBillingForm();
                const planCard = btn.closest(".plan-card");
                const usersInput = planCard.querySelector(".user-input");
                const users = usersInput?.valueAsNumber || 1;
                const priceEl = planCard.querySelector(".plan-price");
                const state = document.getElementById("state").value;
                const companyState = "Karnataka";
                const isYearly = toggle.checked;

                const price = isYearly
                    ? priceEl.dataset.yearPrice
                    : priceEl.dataset.quarterPrice;
                const freq = isYearly
                    ? priceEl.dataset.yearFreq
                    : priceEl.dataset.quarterFreq;

                const planName = btn.dataset.subName;
                const pricebookId = isYearly
                    ? btn.dataset.yearpbid
                    : btn.dataset.quarterpbid;
                const productid = btn.dataset.productId;

                selectedBaseTotal = users * parseFloat(price);

                document.getElementById("summaryPlanName").textContent = planName;
                document.getElementById("summaryBillingCycle").textContent = freq;
                document.getElementById("summaryUserCount").textContent = users;

                let taxAmount = updateGSTTaxBreakup(state, companyState, selectedBaseTotal);
                const finalTotal = selectedBaseTotal;
                document.getElementById("summarySubTotal").textContent = "₹" + finalTotal.toFixed(2);
                document.getElementById("summaryTotal").textContent = "₹" + finalTotal.toFixed(2);

                const formData = new FormData();
                formData.append("user_count", users);
                formData.append("plan_id", pricebookId);
                formData.append("product", productid);
                formData.append(csrfMagicName, csrfMagicToken);

                fetch("index.php?module=PricingPlans&parent=Settings&action=StorePlanSelectionAjax", {
                    method: "POST",
                    headers: { "x-requested-with": "XMLHttpRequest" },
                    body: formData
                })
                .then((response) => response.json())
                .then((data) => {
                    if (!data.success) {
                        app.helper.showErrorNotification({ message: "Plan save failed." });
                        return;
                    }
                    
                    // HIDE BANNER WHEN MOVING TO SUMMARY
                    hideSubscriptionBanner();
                    
                    planSection.style.display = "none";
                    summarySection.classList.add("active");
                    summarySection.style.display = "block";
                    updateSteps("summary");
                })
                .catch(() => {
                    app.helper.showErrorNotification({ message: "Server error. Try again." });
                });
            };

            originalSelectHandlers.set(btn, originalHandler);
            btn.addEventListener("click", originalHandler);
        });
    }

    setupSelectButtons();

    function updateGSTTaxBreakup(state, companyState, baseAmount) {
        const cgstRow = document.getElementById("cgstRow");
        const sgstRow = document.getElementById("sgstRow");
        const igstRow = document.getElementById("igstRow");
        const taxRow = document.getElementById("taxRow");

        let taxAmount = 0;

        if (state === companyState) {
            const cgst = (baseAmount * 0.09).toFixed(2);
            const sgst = (baseAmount * 0.09).toFixed(2);
            taxAmount = parseFloat(cgst) + parseFloat(sgst);

            document.getElementById("cgstValue").textContent = "₹" + cgst;
            document.getElementById("sgstValue").textContent = "₹" + sgst;
            document.getElementById("taxValue").textContent = "₹" + taxAmount.toFixed(2);
            cgstRow.style.display = "flex";
            sgstRow.style.display = "flex";
            igstRow.style.display = "none";
        } else {
            const igst = (baseAmount * 0.18).toFixed(2);
            taxAmount = parseFloat(igst);

            document.getElementById("igstValue").textContent = "₹" + igst;
            document.getElementById("taxValue").textContent = "₹" + taxAmount.toFixed(2);
            cgstRow.style.display = "none";
            sgstRow.style.display = "none";
            igstRow.style.display = "flex";
        }

        return taxAmount;
    }

    backButton.addEventListener("click", function () {
        summarySection.classList.remove("active");
        summarySection.style.display = "none";
        planSection.style.display = "block";
        updateSteps("plan");
        hideUpgradePreview();

        showSubscriptionBanner();
    });

    payButton.addEventListener("click", function () {
        if (upgradeMode && upgradeCalculation) {
            handleUpgradePayment();
            return;
        }

        const fullName = document.getElementById("fullName").value.trim();
        const address = document.getElementById("address").value.trim();
        const city = document.getElementById("city").value.trim();
        const state = document.getElementById("state").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const zip = document.getElementById("zip").value.trim();
        const country = document.getElementById("country").value;
    
        if (!fullName || !address || !city || !zip || !country || !phone || !state) {
            app.helper.showErrorNotification({
                message: "Please fill all billing details.",
            });
            return;
        }
    
        if (!/^\d{6}$/.test(zip)) {
            app.helper.showErrorNotification({
                message: "Please enter a valid 6-digit ZIP code.",
            });
            return;
        }
    
        document.getElementById("summarySection").classList.remove("active");
        document.getElementById("summarySection").style.display = "none";
        document.getElementById("paymentSection").style.display = "block";
        document.getElementById("paymentSection").classList.add("active");
        updateSteps("payment");
    
        document.getElementById("fullNamePreview").textContent = fullName;
        document.getElementById("addressPreview").textContent = address;
        document.getElementById("cityPreview").textContent = city;
        document.getElementById("statePreview").textContent = state;
        document.getElementById("zipPreview").textContent = zip;
        document.getElementById("countryPreview").textContent = country;
        document.getElementById("phonePreview").textContent = phone;
        document.getElementById("paymentPlanName").textContent = document.getElementById("summaryPlanName").textContent;
        document.getElementById("paymentBillingCycle").textContent = document.getElementById("summaryBillingCycle").textContent;
        document.getElementById("paymentBasePrice").textContent = document.getElementById("summarySubTotal").textContent;
        document.getElementById("paymentTotalAmount").textContent = document.getElementById("summaryTotal").textContent;
        document.getElementById("paymentTaxAmount").textContent = document.getElementById("taxValue").textContent;
        
        hideSubscriptionBanner();
    });

    document.getElementById("backToSummary").addEventListener("click", function () {
        document.getElementById("paymentSection").style.display = "none";
        document.getElementById("paymentSection").classList.remove("active");
        document.getElementById("summarySection").classList.add("active");
        document.getElementById("summarySection").style.display = "block";
        updateSteps("summary");
        

        
        // Scroll to summary section
        setTimeout(() => {
            document.getElementById("summarySection").scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
        }, 100);
    });
    
    const payNowButton = document.getElementById("payNowButton");

    payNowButton.addEventListener("click", async function (event) {
         event.preventDefault();  // prevents form submission / page reload

        if (upgradeMode && upgradeCalculation) {
            await processUpgradePayment();  
            return;
        }

        app.helper.showProgress();
    
        const fullName = document.getElementById("fullName").value.trim();
        const address = document.getElementById("address").value.trim();
        const city = document.getElementById("city").value.trim();
        const state = document.getElementById("state").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const zip = document.getElementById("zip").value.trim();
        const country = document.getElementById("country").value;
        const userCount = document.getElementById("summaryUserCount").textContent.trim();
    
        const selectedPlanId = document.querySelector(
            ".select-button[data-sub-name='" +
            document.getElementById("summaryPlanName").textContent.trim() +
            "']"
        )?.dataset.subId || "";
    
        const formData = new FormData();
        formData.append("fullName", fullName);
        formData.append("street", address);
        formData.append("postal_code", zip);
        formData.append("country", country);
        formData.append("phone", phone);
        formData.append("state", state);
        formData.append("city", city);
        formData.append("users", userCount);
        formData.append("subscription_id", selectedPlanId);
        formData.append(csrfMagicName, csrfMagicToken);
        
        try {
            const response = await fetch("index.php?module=PricingPlans&parent=Settings&action=SendSalesOrderAjax", {
                method: "POST",
                headers: { "x-requested-with": "XMLHttpRequest" },
                body: formData,
            });

            const result = await response.json();
            if (result.success && result.message.result.status == "success") {
                const subscriptionId = result.message.result.subscription_id;
    
                const options = {
                    key: "rzp_live_R7XtSA0qtO5Cej",
                    name: "CRM Doctor",
                    description: "Subscription Payment",
                    image: "https://central.crm-doctor.com/staging/layouts/v7/skins/images/favicon.ico",
                    subscription_id: subscriptionId,
                    handler: function (response) {
                        // app.helper.showProgress();
                        // setTimeout(function () {
                        //     app.helper.hideProgress();
                        //     app.helper.showSuccessNotification({
                        //         message: "Payment successful! Redirecting...",
                        //         type: "success",
                        //     });

                        //     showSubscriptionSuccessPopup(false);
    
    
                        //     setTimeout(function () {
                        //         // Add timestamp to prevent caching
                        //         const timestamp = new Date().getTime();
                        //         window.location.href = "index.php?module=MyAccount&parent=Settings&view=List&block=13&fieldid=46&t=" + timestamp;
                        //     }, 1000);
                        // }, 1000);
                        showSubscriptionSuccessPopup(false);
                    },
                    theme: {
                        color: "#33ed88",
                    },
                    method: {
                        netbanking: true,
                        card: true,
                        upi: true,
                        wallet: true
                    },
                };
    
                const rzp = new Razorpay(options);
                rzp.open();
                app.helper.hideProgress();
            } else {
                app.helper.hideProgress();
                app.helper.showErrorNotification({
                    message: result.message || "Unknown error occurred.",
                });
            }
        } catch (err) {
            console.error(err);
            app.helper.hideProgress();
            app.helper.showErrorNotification({
                message: "Request Failed. Please try again.",
            });
        }
    });
    
    updateSteps("plan");

    function clearBillingForm() {
        document.getElementById('fullName').value = '';
        document.getElementById('phone').value = '';
        document.getElementById('address').value = '';
        document.getElementById('city').value = '';
        document.getElementById('state').value = '';
        document.getElementById('zip').value = '';
        document.getElementById('country').value = '';
        $('#state').val('').trigger('change');

        document.getElementById('fullNamePreview').innerText = '';
        document.getElementById('phonePreview').innerText = '';
        document.getElementById('addressPreview').innerText = '';
        document.getElementById('cityPreview').innerText = '';
        document.getElementById('statePreview').innerText = '';
        document.getElementById('zipPreview').innerText = '';
        document.getElementById('countryPreview').innerText = '';
    }

    // State select box rendering
    const stateSelect = document.getElementById("state");
    const states = [
        { name: "Andaman and Nicobar Islands", code: "Andaman and Nicobar Islands" },
        { name: "Andhra Pradesh", code: "Andhra Pradesh" },
        { name: "Arunachal Pradesh", code: "Arunachal Pradesh" },
        { name: "Assam", code: "Assam" },
        { name: "Bihar", code: "Bihar" },
        { name: "Chandigarh", code: "Chandigarh" },
        { name: "Chhattisgarh", code: "Chhattisgarh" },
        { name: "Dadra and Nagar Haveli", code: "Dadra and Nagar Haveli" },
        { name: "Daman and Diu", code: "Daman and Diu" },
        { name: "Delhi", code: "Delhi" },
        { name: "Goa", code: "Goa" },
        { name: "Gujarat", code: "Gujarat" },
        { name: "Haryana", code: "Haryana" },
        { name: "Himachal Pradesh", code: "Himachal Pradesh" },
        { name: "Jammu and Kashmir", code: "Jammu and Kashmir" },
        { name: "Jharkhand", code: "Jharkhand" },
        { name: "Karnataka", code: "Karnataka" },
        { name: "Kerala", code: "Kerala" },
        { name: "Ladakh", code: "Ladakh" },
        { name: "Lakshadweep", code: "Lakshadweep" },
        { name: "Madhya Pradesh", code: "Madhya Pradesh" },
        { name: "Maharashtra", code: "Maharashtra" },
        { name: "Manipur", code: "Manipur" },
        { name: "Meghalaya", code: "Meghalaya" },
        { name: "Mizoram", code: "Mizoram" },
        { name: "Nagaland", code: "Nagaland" },
        { name: "Odisha", code: "Odisha" },
        { name: "Puducherry", code: "Puducherry" },
        { name: "Punjab", code: "Punjab" },
        { name: "Rajasthan", code: "Rajasthan" },
        { name: "Sikkim", code: "Sikkim" },
        { name: "Tamil Nadu", code: "Tamil Nadu" },
        { name: "Telangana", code: "Telangana" },
        { name: "Tripura", code: "Tripura" },
        { name: "Uttar Pradesh", code: "Uttar Pradesh" },
        { name: "Uttarakhand", code: "Uttarakhand" },
        { name: "West Bengal", code: "West Bengal" }
    ];

    states.forEach(state => {
        const option = document.createElement("option");
        option.value = state.code;
        option.text = state.name;
        stateSelect.appendChild(option);
    });

    $('#state').select2({
        placeholder: "Select State",
        allowClear: true
    });

    $('#state').on('change', function (e) {
        const state = this.value;
        const companyState = "Karnataka";

        if (!state) {
            document.getElementById("taxBreakup").style.display = "none";
            document.getElementById("summaryTotal").textContent = "₹" + selectedBaseTotal.toFixed(2);
            return;
        }

        if (selectedBaseTotal > 0) {
            document.getElementById("taxBreakup").style.display = "block";
            const taxAmount = updateGSTTaxBreakup(state, companyState, selectedBaseTotal);
            const finalTotal = selectedBaseTotal + taxAmount;
            document.getElementById("summaryTotal").textContent = "₹" + finalTotal.toFixed(2);
        }
    });

    // UPGRADE FUNCTIONALITY
    
    setTimeout(() => {
        checkForExistingSubscription();
    }, 1000);
    

    function checkForExistingSubscription() {
        const formData = new FormData();
        formData.append(csrfMagicName, csrfMagicToken);
        
        fetch('index.php?module=PricingPlans&parent=Settings&action=GetCurrentSubscriptionAjax', {
            method: 'POST',
            headers: { 
                'x-requested-with': 'XMLHttpRequest' 
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log('Subscription check response:', data);
            
            if (data.success && data.result && data.result.subscription) {
                currentSubscription = data.result.subscription;
                showCurrentSubscriptionBanner();
                window.availablePlansForUpgrade = data.result.available_plans || [];
                
                // NEW: Restrict plan cards immediately when subscription exists
                restrictPlanCards();
            } else if (data.success && data.subscription) {
                currentSubscription = data.subscription;
                showCurrentSubscriptionBanner();
                window.availablePlansForUpgrade = data.available_plans || [];
                
                // NEW: Restrict plan cards immediately when subscription exists
                restrictPlanCards();
            }
        })
        .catch(error => {
            console.error('Error checking subscription:', error);
        });
    }
    
    function isPlanExpired() {
        if (!currentSubscription) return true;
        
        const daysRemaining = parseInt(currentSubscription.days_remaining) || 0;
        const status = currentSubscription.subscrip_status?.toLowerCase() || '';
        
        return daysRemaining <= 0 || status === 'expired' || status === 'cancelled';
    }
    function enableAllPlansForRenewal() {
        selectButtons.forEach(btn => {
            btn.textContent = 'Renew Plan';
            btn.disabled = false;
            btn.style.background = '#4CAF50';
            btn.style.cursor = 'pointer';
            btn.style.opacity = '1';
            btn.style.color = 'white';
            btn.title = 'Select this plan to renew';
            
            const planCard = btn.closest('.plan-card');
            const userInput = planCard.querySelector('.user-input');
            if (userInput) {
                userInput.disabled = false;
                userInput.min = 1;
                userInput.value = 1;
                userInput.style.opacity = '1';
                userInput.style.cursor = 'text';
                userInput.title = 'Select number of users';
            }
            
            const arrowBtns = planCard.querySelectorAll('.arrow-btn');
            arrowBtns.forEach(arrowBtn => {
                arrowBtn.disabled = false;
                arrowBtn.style.opacity = '1';
                arrowBtn.style.cursor = 'pointer';
            });
        });
        
        // Update banner for expired plan
        const banner = document.querySelector('.current-subscription-banner');
        if (banner) {
            banner.style.background = 'linear-gradient(135deg, #ff9800 0%, #f57c00 100%)';
            const heading = banner.querySelector('h3');
            if (heading) {
                heading.textContent = '⚠️ Plan Expired - Choose Any Plan to Renew';
            }
            const upgradeBtn = banner.querySelector('.upgrade-btn');
            if (upgradeBtn) {
                upgradeBtn.style.display = 'none';
            }
        }
    }
    // Restrict plan cards when subscription exists
    function restrictPlanCards() {
        if (!currentSubscription) return;
        
        // Check if plan is expired first
        if (isPlanExpired()) {
            enableAllPlansForRenewal();
            return;
        }
        
        const currentPlan = currentSubscription.plan_name;
        const currentBilling = currentSubscription.subscription_frequency;
        const currentUsers = currentSubscription.company_size || currentSubscription.no_of_users || 1;
        const currentPricebookId = currentSubscription.sub_pricebook_id;
        
        selectButtons.forEach(btn => {
            const isYearly = toggle.checked;
            const planPricebookId = isYearly ? btn.dataset.yearpbid : btn.dataset.quarterpbid;
            const selectedPlan = btn.dataset.subName;
            const selectedBilling = isYearly ? 'Yearly' : 'Quarterly';
            
            const isCurrentPlan = planPricebookId === currentPricebookId;
            
            if (isCurrentPlan) {
                // Current plan - disable selection
                btn.textContent = '✓ Current Plan';
                btn.disabled = true;
                btn.style.background = '#9e9e9e';
                btn.style.cursor = 'not-allowed';
                btn.style.opacity = '0.6';
                btn.style.color = 'white';
                
                const planCard = btn.closest('.plan-card');
                const userInput = planCard.querySelector('.user-input');
                if (userInput) {
                    userInput.disabled = true;
                    userInput.style.opacity = '0.6';
                    userInput.style.cursor = 'not-allowed';
                    userInput.title = 'Current plan - cannot modify';
                }
                
                const arrowBtns = planCard.querySelectorAll('.arrow-btn');
                arrowBtns.forEach(arrowBtn => {
                    arrowBtn.disabled = true;
                    arrowBtn.style.opacity = '0.6';
                    arrowBtn.style.cursor = 'not-allowed';
                });
            } else {
                // Check business rules for non-current plans
                const planAllowed = isPlanUpgradeAllowed(currentPlan, selectedPlan);
                const billingAllowed = isBillingUpgradeAllowed(currentBilling, selectedBilling);
                
                // FIX: When current plan is Enterprise, only allow Enterprise plans

                if (currentPlan.includes('Enterprise') && !selectedPlan.includes('Enterprise')) {

                    // BLOCK: Enterprise to Starter downgrade

                    btn.textContent = 'Downgrade Not Allowed';

                    btn.disabled = true;

                    btn.style.background = '#0c0c0cff';

                    btn.style.cursor = 'not-allowed';

                    btn.style.opacity = '0.6';

                    btn.style.color = 'white';

                    btn.title = `Cannot downgrade from ${currentPlan} to ${selectedPlan} plan`;

                    disablePlanCardInputs(btn);

                } else if (!planAllowed) {

                    // Scenario 1 & 8: Block downgrade (Enterprise to Starter)
                    btn.textContent = 'Downgrade Not Allowed';
                    btn.disabled = true;
                    btn.style.background = '#0c0c0cff';
                    btn.style.cursor = 'not-allowed';
                    btn.style.opacity = '0.6';
                    btn.style.color = 'white';
                    btn.title = 'Cannot downgrade from Enterprise to Starter plan';
                    disablePlanCardInputs(btn);
                } else if (!billingAllowed) {
                    // Scenario 3: Block billing downgrade (Yearly to Quarterly)
                    btn.textContent = 'Downgrade Not Allowed';
                    btn.disabled = true;
                    btn.style.background = '#0c0c0cff';
                    btn.style.cursor = 'not-allowed';
                    btn.style.opacity = '0.6';
                    btn.style.color = 'white';
                    btn.title = 'Cannot switch from Yearly to Quarterly billing';
                    disablePlanCardInputs(btn);
                } else {
                    // Scenarios 2, 4: Plan is allowed for upgrade - show as available but require upgrade mode
                    btn.textContent = 'Upgrade Available';
                    btn.disabled = true; // Still disabled until upgrade mode is activated
                    btn.style.background = '#4CAF50';
                    btn.style.cursor = 'not-allowed';
                    btn.style.opacity = '0.7';
                    btn.style.color = 'white';
                    btn.title = 'Click "Upgrade Plan" button to enable selection';
                    disablePlanCardInputs(btn);
                }
            }
        });
    }

    // Helper function to disable plan card inputs
    function disablePlanCardInputs(btn) {
        const planCard = btn.closest('.plan-card');
        const userInput = planCard.querySelector('.user-input');
        if (userInput) {
            userInput.disabled = true;
            userInput.style.opacity = '0.6';
            userInput.style.cursor = 'not-allowed';
        }
        
        const arrowBtns = planCard.querySelectorAll('.arrow-btn');
        arrowBtns.forEach(arrowBtn => {
            arrowBtn.disabled = true;
            arrowBtn.style.opacity = '0.6';
            arrowBtn.style.cursor = 'not-allowed';
        });
    }
    
     function showCurrentSubscriptionBanner() {
        if (!currentSubscription) return;
        
        const daysRemaining = parseInt(currentSubscription.days_remaining) || 0;
        const currentAmount = parseFloat(currentSubscription.pre_tax_total || 0);
        
        // Update banner content using list.tpl
        document.getElementById('bannerPlanName').textContent = `Current Plan: ${currentSubscription.plan_name || 'Active Plan'}`;
        document.getElementById('bannerUserCount').textContent = currentSubscription.company_size || currentSubscription.no_of_users || 'Users Count';
        document.getElementById('bannerStatus').textContent = currentSubscription.subscrip_status || 'Active';
        document.getElementById('bannerBilling').textContent = currentSubscription.frequency_label || currentSubscription.subscription_frequency || 'Quarterly';
        document.getElementById('bannerDaysRemaining').innerHTML = daysRemaining > 0 
            ? `<strong>${daysRemaining}</strong> days remaining` 
            : 'Renewal due soon';
        document.getElementById('bannerAmount').textContent = `₹${currentAmount.toFixed(2)}`;
        
        // Show the banner
        currentSubscriptionBanner.style.display = 'flex';
        
        // Setup upgrade button
        upgradeModeBtn.onclick = enableUpgradeMode;
    }

    
   function hideUpgradePreview() {
        upgradeSummary.style.display = 'none';
        upgradePaymentNote.style.display = 'none';
    }

    
    window.enableUpgradeMode = function() {
        upgradeMode = true;
        
        // Update banner styling and content
        currentSubscriptionBanner.style.background = 'linear-gradient(135deg, #4CAF50 0%, #45a049 100%)';
        document.getElementById('bannerPlanName').textContent = `✓ Upgrade Mode Active - Current: ${currentSubscription?.plan_name || 'Current Plan'}`;
        
        // Update upgrade button
        upgradeModeBtn.innerHTML = '<span class="btn-icon">✕</span> Cancel Upgrade';
        upgradeModeBtn.onclick = cancelUpgradeMode;
        
        const currentPlan = currentSubscription.plan_name;
        const currentBilling = currentSubscription.subscription_frequency;
        const currentUsers = parseInt(currentSubscription.company_size) || parseInt(currentSubscription.no_of_users) || 1;
        const currentPricebookId = currentSubscription.sub_pricebook_id;

        selectButtons.forEach(btn => {
            const isYearly = toggle.checked;
            const planPricebookId = isYearly ? btn.dataset.yearpbid : btn.dataset.quarterpbid;
            const selectedPlan = btn.dataset.subName;
            const selectedBilling = isYearly ? 'Yearly' : 'Quarterly';
            
            const isCurrentPlan = planPricebookId === currentPricebookId;
            
            // Skip current plan 
            if (isCurrentPlan) {
                return;
            }
            
            const planAllowed = isPlanUpgradeAllowed(currentPlan, selectedPlan);
            const billingAllowed = isBillingUpgradeAllowed(currentBilling, selectedBilling);
            
            // When current plan is Enterprise, only enable Enterprise plans in upgrade mode
            if (currentPlan.includes('Enterprise') && !selectedPlan.includes('Enterprise')) {
                btn.textContent = 'Downgrade Not Allowed';
                btn.disabled = true;
                btn.style.background = '#0c0c0cff';
                btn.style.cursor = 'not-allowed';
                btn.style.opacity = '0.6';
                btn.style.color = 'white';
                btn.title = `Cannot downgrade from ${currentPlan} to ${selectedPlan} plan`;
                disablePlanCardInputs(btn);
                return;
            }
            
            if (planAllowed && billingAllowed) {
                // Calculate minUsers based on plan type
                const isStarterToStarter = currentPlan.includes('Starter') && selectedPlan.includes('Starter');
                const isStarterToEnterprise = currentPlan.includes('Starter') && selectedPlan.includes('Enterprise');
                const isSamePlanBillingChange = currentPlan && selectedPlan && 
                                    getPlanType(currentPlan) === getPlanType(selectedPlan) && 
                                    currentBilling !== selectedBilling &&
                                    isBillingUpgradeAllowed(currentBilling, selectedBilling);

                const isEnterpriseBillingUpgrade = currentPlan && selectedPlan &&
                                                    currentPlan.includes('Enterprise') && 
                                                    selectedPlan.includes('Enterprise') &&
                                                    currentBilling === 'Quarterly' && 
                                                    selectedBilling === 'Yearly';
                
                // NEW LOGIC: Different handling for Starter and Enterprise
                const isEnterpriseQuarterly = selectedPlan.includes('Enterprise') && selectedBilling === 'Quarterly';
                const isEnterpriseYearly = selectedPlan.includes('Enterprise') && selectedBilling === 'Yearly';
                
                let minUsers;
                let initialUsers;
                let disableDownArrow = false;
                
                if (isStarterToStarter) {
                    // STARTER TO STARTER: Cannot reduce users, must maintain minimum
                    minUsers = currentUsers;
                    initialUsers = currentUsers;

                } else if (isEnterpriseQuarterly) {
                    // Enterprise Quarterly: Increase by 1
                    minUsers = currentUsers;
                    initialUsers = currentUsers + 1;
                    
                    // minUsers = 1;
                    // initialUsers = currentUsers;
                } else if (isEnterpriseYearly) {
                    // Enterprise Yearly: Allow decreasing, minimum 1
                    minUsers = 1;
                    initialUsers = currentUsers;
                } else if (isSamePlanBillingChange || isEnterpriseBillingUpgrade) {
                    minUsers = 1;
                    initialUsers = currentUsers;

                } else if (isStarterToEnterprise) {
                    minUsers = currentUsers;
                    initialUsers = currentUsers;
                } else {
                    minUsers = currentUsers + 1;
                    initialUsers = currentUsers + 1;

                }
                
                console.log('Upgrade conditions:', {
                    isStarterToStarter,
                    isEnterpriseQuarterly,
                    isEnterpriseYearly,
                    currentPlan,
                    selectedPlan,
                    currentBilling,
                    selectedBilling,
                    minUsers,
                    initialUsers,
                    currentUsers,
                    disableDownArrow
                });
                
                // Enable upgrade for allowed plans
                btn.textContent = 'Calculate Upgrade Cost';
                btn.disabled = false;
                btn.style.background = 'linear-gradient(135deg, #4CAF50 0%, #45a049 100%)';
                btn.style.cursor = 'pointer';
                btn.style.opacity = '1';
                btn.style.color = 'white';
                btn.title = 'Click to calculate upgrade cost';
                
                const planCard = btn.closest('.plan-card');
                const userInput = planCard.querySelector('.user-input');
                if (userInput) {
                    userInput.min = minUsers;
                    userInput.value = initialUsers;
                    userInput.disabled = false;
                    userInput.style.opacity = '1';
                    userInput.style.cursor = 'text';
                    
                    // Store the disable state on the input element
                    userInput.dataset.disableDownArrow = disableDownArrow;
                    
                    // Set appropriate title based on scenario
                    if (isStarterToStarter) {
                        userInput.title = `Cannot reduce below ${minUsers} users (current user count)`;
                    } else if (isEnterpriseQuarterly) {
                        userInput.title = `Minimum ${minUsers} users required (current ${currentUsers} + 1)`;
                    } else if (isEnterpriseYearly) {
                        userInput.title = `You can adjust user count from ${currentUsers} to any number (min 1)`;
                    } else if (isSamePlanBillingChange || isEnterpriseBillingUpgrade) {
                        userInput.title = `You can adjust user count from ${currentUsers} to any number`;
                    } else if (isStarterToEnterprise) {
                        userInput.title = `Minimum ${minUsers} users required (same as current)`;
                    } else {
                        userInput.title = `Minimum ${minUsers} users required for upgrade`;
                    }
                    
                    // Add validation listener
                    userInput.removeEventListener('input', userInput._upgradeValidator);
                    userInput._upgradeValidator = function() {
                        const validation = validateUserCount(this.value, currentUsers, true, currentPlan, selectedPlan, currentBilling, selectedBilling);
                        if (!validation.valid) {
                            this.style.borderColor = '#ff6b6b';
                            this.style.boxShadow = '0 0 0 2px rgba(255, 107, 107, 0.2)';
                        } else {
                            this.style.borderColor = '';
                            this.style.boxShadow = '';
                        }
                    };
                    userInput.addEventListener('input', userInput._upgradeValidator);
                }
                
                // Handle arrow buttons - DISABLE DOWN ARROW for Starter to Starter
                const arrowBtns = planCard.querySelectorAll('.arrow-btn');
                arrowBtns.forEach(arrowBtn => {
                    const isDownArrow = arrowBtn.classList.contains('down-arrow');
                    
                    if (isDownArrow && disableDownArrow) {
                        // Disable down arrow for Starter to Starter upgrades
                        arrowBtn.disabled = true;
                        arrowBtn.style.opacity = '0.3';
                        arrowBtn.style.cursor = 'not-allowed';
                        arrowBtn.title = `Cannot reduce below ${minUsers} users`;
                    } else {
                        // Enable other arrows
                        arrowBtn.disabled = false;
                        arrowBtn.style.opacity = '1';
                        arrowBtn.style.cursor = 'pointer';
                        
                        if (isStarterToStarter) {
                            arrowBtn.title = `Minimum ${minUsers} users required`;
                        } else if (isEnterpriseQuarterly) {
                            arrowBtn.title = `Minimum ${minUsers} users required`;
                        } else if (isEnterpriseYearly) {
                            arrowBtn.title = `You can adjust user count freely`;
                        } else if (isSamePlanBillingChange || isEnterpriseBillingUpgrade) {
                            arrowBtn.title = `You can adjust user count freely`;
                        } else {
                            arrowBtn.title = `Minimum ${minUsers} users required`;
                        }
                    }
                });
                
                // Setup upgrade click handler
                const originalHandler = originalSelectHandlers.get(btn);
                if (originalHandler) {
                    btn.removeEventListener('click', originalHandler);
                }
                if (btn.upgradeHandler) {
                    btn.removeEventListener('click', btn.upgradeHandler);
                }
                
                const upgradeHandler = (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    const planCard = btn.closest('.plan-card');
                    const usersInput = planCard.querySelector('.user-input');
                    const users = usersInput?.valueAsNumber || 1;
                    const validation = validateUserCount(users, currentUsers, true, currentPlan, selectedPlan, currentBilling, selectedBilling);
                    
                    if (!validation.valid) {
                        app.helper.showErrorNotification({
                            message: validation.message
                        });
                        return;
                    }
                    
                    calculateUpgradeCost(btn);
                };
                
                btn.addEventListener('click', upgradeHandler);
                btn.upgradeHandler = upgradeHandler;
            }
        });
        
        showUpgradeInstructions();
    };
    
    window.cancelUpgradeMode = function() {
        if (confirm('Are you sure you want to cancel the upgrade process?')) {
            // Reset upgrade mode
            upgradeMode = false;
            upgradeCalculation = null;
            
            // Reset banner
            currentSubscriptionBanner.style.background = '';
            document.getElementById('bannerPlanName').textContent = `Current Plan: ${currentSubscription?.plan_name || 'Active Plan'}`;
            upgradeModeBtn.innerHTML = '<span class="btn-icon">⬆</span> Upgrade Plan';
            upgradeModeBtn.onclick = enableUpgradeMode;
            
            // Hide instructions
            upgradeInstructions.style.display = 'none';
            
            // Reset all plan cards to their restricted state
            restrictPlanCards();
        }
    };

    
    function showUpgradeInstructions() {
        upgradeInstructions.style.display = 'block';
    }

    function calculateUpgradeCost(btn) {
        const planCard = btn.closest('.plan-card');
        const usersInput = planCard.querySelector('.user-input');
        const users = usersInput?.valueAsNumber || 1;
        const isYearly = toggle.checked;
        
        // Validate user count before API call
        const currentUsers = parseInt(currentSubscription.company_size) || parseInt(currentSubscription.no_of_users) || 1;

        const currentPlan = currentSubscription.plan_name;
        const selectedPlan = btn.dataset.subName;
        const currentBilling = currentSubscription.subscription_frequency;
        const selectedBilling = isYearly ? 'Yearly' : 'Quarterly';

        const validation = validateUserCount(users, currentUsers, true, currentPlan, selectedPlan, currentBilling, selectedBilling);
        
        if (!validation.valid) {
            app.helper.showErrorNotification({
                message: validation.message
            });
            return;
        }
        
        const newPricebookId = isYearly ? btn.dataset.yearpbid : btn.dataset.quarterpbid;
        const planName = btn.dataset.subName;
        const priceEl = planCard.querySelector('.plan-price');
        const freq = isYearly
            ? priceEl.dataset.yearFreq
            : priceEl.dataset.quarterFreq;
        
        if (!newPricebookId) {
            app.helper.showErrorNotification({
                message: 'Plan configuration error. Please contact support.'
            });
            return;
        }
        
        app.helper.showProgress();
        
        const formData = new FormData();
        formData.append('new_pricebook_id', newPricebookId);
        formData.append('new_user_count', users);
        formData.append(csrfMagicName, csrfMagicToken);
        
        fetch('index.php?module=PricingPlans&parent=Settings&action=CalculateUpgradeAjax', {
            method: 'POST',
            headers: { 'x-requested-with': 'XMLHttpRequest' },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            app.helper.hideProgress();
            console.log('Upgrade calculation response:', data);
            
            if (data.success) {
                upgradeCalculation = data.calculation;
                upgradeCalculation.new_pricebook_id = newPricebookId;
                upgradeCalculation.new_plan_name = planName;
                upgradeCalculation.billing_cycle = freq;
                showUpgradePreview(upgradeCalculation);
            } else {
                app.helper.showErrorNotification({
                    message: data.message || 'Failed to calculate upgrade cost'
                });
            }
        })
        .catch(error => {
            app.helper.hideProgress();
            console.error('Upgrade calculation error:', error);
            app.helper.showErrorNotification({
                message: 'Network error. Please try again.'
            });
        });
    }

    function showUpgradePreview(calculation) {
        
        // Populate upgrade summary using list.tpl
        document.getElementById('upgradeMethod').textContent = getUpgradeMethodText(calculation.upgrade_type);
        document.getElementById('currentPlanName').textContent = calculation.current_plan;
        document.getElementById('currentAmount').textContent = `₹${calculation.current_amount.toFixed(2)}`;
        document.getElementById('currentUsers').textContent = calculation.current_user || 1;
        document.getElementById('newPlanName').textContent = calculation.new_plan;
        document.getElementById('newAmount').textContent = `₹${calculation.new_amount.toFixed(2)}`;
        document.getElementById('newUsers').textContent = calculation.user_count;
        document.getElementById('daysRemaining').textContent = `${calculation.days_remaining} days`;
        document.getElementById('unusedCredit').textContent = `-₹${calculation.unused_credit.toFixed(2)}`;
        document.getElementById('proratedAmount').textContent = `+₹${calculation.prorated_amount.toFixed(2)}`;
        document.getElementById('upgradeAmount').textContent = `₹${calculation.upgrade_amount.toFixed(2)}`;
        document.getElementById('upgradeCharge').textContent = `₹${calculation.upgrade_amount.toFixed(2)}`;
        document.getElementById('nextBillingDate').textContent = calculation.next_billing_date;
        document.getElementById('fullNewAmount').textContent = `₹${calculation.new_amount.toFixed(2)}`;
        document.getElementById('paymentNote').textContent = calculation.upgrade_amount > 0 
            ? 'Payment required now for prorated difference' 
            : 'No payment required - free upgrade!';
        
        // main summary
        document.getElementById('summaryPlanName').textContent = calculation.new_plan || calculation.new_plan_name;
        document.getElementById('summaryBillingCycle').textContent = calculation.billing_cycle;
        document.getElementById('summaryUserCount').textContent = calculation.user_count;
        
        selectedBaseTotal = calculation.upgrade_amount;
        document.getElementById('summarySubTotal').textContent = `₹${calculation.upgrade_amount.toFixed(2)}`;
        document.getElementById('summaryTotal').textContent = `₹${calculation.upgrade_amount.toFixed(2)}`;
        
        upgradeSummary.style.display = 'block';
        
        hideSubscriptionBanner();
        
        planSection.style.display = 'none';
        summarySection.classList.add('active');
        summarySection.style.display = 'block';
        updateSteps('summary');


    }

    function hideUpgradeInstructions() {
        upgradeInstructions.style.display = 'none';
    }

    function handleUpgradePayment() {
        const fullName = document.getElementById("fullName").value.trim();
        const address = document.getElementById("address").value.trim();
        const city = document.getElementById("city").value.trim();
        const state = document.getElementById("state").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const zip = document.getElementById("zip").value.trim();
        const country = document.getElementById("country").value;
    
        if (!fullName || !address || !city || !zip || !country || !phone || !state) {
            app.helper.showErrorNotification({
                message: "Please fill all billing details.",
            });
            return;
        }
        
        if (!/^\d{6}$/.test(zip)) {
            app.helper.showErrorNotification({
                message: "Please enter a valid 6-digit ZIP code.",
            });
            return;
        }
        
        // Hide summary and show payment section
        document.getElementById("summarySection").classList.remove("active");
        document.getElementById("summarySection").style.display = "none";
        document.getElementById("paymentSection").style.display = "block";
        document.getElementById("paymentSection").classList.add("active");
        updateSteps("payment");
        
        updatePaymentPreviewForUpgrade();
        
        // Scroll to payment section
        setTimeout(() => {
            const paymentSection = document.getElementById("paymentSection");
            if (paymentSection) {
                paymentSection.scrollIntoView({ 
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }, 300);
        
        const payNowBtn = document.getElementById("payNowButton");
        if (payNowBtn) {
            const buttonText = upgradeCalculation.upgrade_amount > 0 
                ? `Confirm & Process Upgrade (₹${upgradeCalculation.upgrade_amount.toFixed(2)})`
                : 'Complete Free Upgrade';
            payNowBtn.textContent = buttonText;
            
            // Add special styling for upgrade button
            payNowBtn.style.background = 'linear-gradient(135deg, #4CAF50 0%, #45a049 100%)';
            payNowBtn.style.boxShadow = '0 4px 15px rgba(76, 175, 80, 0.3)';
        }
        
        // HIDE BANNER IN PAYMENT STEP
        hideSubscriptionBanner();
    }
    
   function getUpgradeMethodText(upgradeType) {
        const methods = {
            'user_increase': 'Additional Users',
            'billing_cycle_change': 'Billing Cycle Change',
            'plan_upgrade': 'Plan Upgrade'
        };
        return methods[upgradeType] || 'Upgrade';
    }

    function updatePaymentPreviewForUpgrade() {
        // Update billing preview
        document.getElementById("fullNamePreview").textContent = document.getElementById("fullName").value.trim();
        document.getElementById("phonePreview").textContent = document.getElementById("phone").value.trim();
        document.getElementById("addressPreview").textContent = document.getElementById("address").value.trim();
        document.getElementById("cityPreview").textContent = document.getElementById("city").value.trim();
        document.getElementById("statePreview").textContent = document.getElementById("state").value.trim();
        document.getElementById("zipPreview").textContent = document.getElementById("zip").value.trim();
        document.getElementById("countryPreview").textContent = document.getElementById("country").value.trim();

        // Update payment summary
        document.getElementById("paymentPlanName").textContent = upgradeCalculation.new_plan_name || upgradeCalculation.new_plan;
        document.getElementById("paymentBillingCycle").textContent = upgradeCalculation.billing_cycle;
        document.getElementById("paymentBasePrice").textContent = `₹${upgradeCalculation.upgrade_amount.toFixed(2)}`;
        
        const state = document.getElementById("state").value;
        const companyState = "Karnataka";
        
        if (state && upgradeCalculation.upgrade_amount > 0) {
            const taxAmount = updateGSTTaxBreakup(state, companyState, upgradeCalculation.upgrade_amount);
            const finalTotal = upgradeCalculation.upgrade_amount + taxAmount;
            document.getElementById("paymentTotalAmount").textContent = `₹${finalTotal.toFixed(2)}`;
            document.getElementById("paymentTaxAmount").textContent = `₹${taxAmount.toFixed(2)}`;
        } else {
            document.getElementById("paymentTotalAmount").textContent = `₹${upgradeCalculation.upgrade_amount.toFixed(2)}`;
            document.getElementById("paymentTaxAmount").textContent = `₹0.00`;
        }
        
        // Show upgrade payment note
        document.getElementById('upgradeFromPlan').textContent = upgradeCalculation.current_plan;
        document.getElementById('upgradeToPlan').textContent = upgradeCalculation.new_plan_name;
        document.getElementById('upgradeUserCount').textContent = upgradeCalculation.user_count;
        document.getElementById('upgradeDaysRemaining').textContent = upgradeCalculation.days_remaining;
        document.getElementById('upgradeChargeAmount').textContent = `₹${upgradeCalculation.upgrade_amount.toFixed(2)}`;
        document.getElementById('upgradeNextBilling').textContent = upgradeCalculation.next_billing_date;
        document.getElementById('upgradeFullAmount').textContent = `₹${upgradeCalculation.new_amount.toFixed(2)}`;
        
        upgradePaymentNote.style.display = 'block';
        
        // Update pay button text for upgrade
        const payNowBtn = document.getElementById("payNowButton");
        if (payNowBtn) {
            const buttonText = upgradeCalculation.upgrade_amount > 0 
                ? `Confirm & Process Upgrade (₹${upgradeCalculation.upgrade_amount.toFixed(2)})`
                : 'Complete Free Upgrade';
            payNowBtn.textContent = buttonText;
        }
    }
    

    async function processUpgradePayment() {
        app.helper.showProgress();

        try {
            const billingDetails = {
                fullName: document.getElementById('fullName').value.trim(),
                address: document.getElementById('address').value.trim(),
                city: document.getElementById('city').value.trim(),
                state: document.getElementById('state').value.trim(),
                phone: document.getElementById('phone').value.trim(),
                zip: document.getElementById('zip').value.trim(),
                country: document.getElementById('country').value.trim()
            };

            if (!upgradeCalculation || !upgradeCalculation.new_pricebook_id) {
                throw new Error('Upgrade data missing. Please restart the upgrade process.');
            }

            const formData = new FormData();
            formData.append('upgrade_calculation', JSON.stringify(upgradeCalculation));
            formData.append('billing_details', JSON.stringify(billingDetails));
            formData.append('new_pricebook_id', upgradeCalculation.new_pricebook_id);
            formData.append(csrfMagicName, csrfMagicToken);

            const response = await fetch(
                'index.php?module=PricingPlans&parent=Settings&action=ProcessUpgradeAjax',
                { 
                    method: 'POST', 
                    headers: { 'x-requested-with': 'XMLHttpRequest' }, 
                    body: formData 
                }
            );
            
            const result = await response.json();
            console.log('Upgrade processing result:', result);

            app.helper.hideProgress();

            if (!result.success) {
                throw new Error(result.message || 'Upgrade processing failed');
            }

            const data = result.result;

            // Check if payment is required
            if (data.requires_payment && data.razorpay_order_id) {
                // Open Razorpay Checkout Modal
                const options = {
                    key: data.razorpay_key,
                    amount: Math.round(data.upgrade_amount * 100), // Amount in paise
                    currency: 'INR',
                    name: 'CRM Doctor',
                    description: `Upgrade to ${data.new_plan_name}`,
                    image: 'https://central.crm-doctor.com/staging/layouts/v7/skins/images/favicon.ico',
                    order_id: data.razorpay_order_id,
                    handler: async function (razorpayResponse) {
                        console.log('Payment successful:', razorpayResponse);
                    
                        app.helper.showProgress();
                        
                        try {
                            // Confirm payment on server
                            const confirmData = new FormData();
                            confirmData.append('razorpay_payment_id', razorpayResponse.razorpay_payment_id);
                            confirmData.append('razorpay_order_id', razorpayResponse.razorpay_order_id);
                            confirmData.append('razorpay_signature', razorpayResponse.razorpay_signature);
                            confirmData.append(csrfMagicName, csrfMagicToken);
                            
                            const confirmResponse = await fetch(
                                'index.php?module=PricingPlans&parent=Settings&action=ConfirmUpgradePaymentAjax',
                                {
                                    method: 'POST',
                                    headers: { 'x-requested-with': 'XMLHttpRequest' },
                                    body: confirmData
                                }
                            );
                            
                            const confirmResult = await confirmResponse.json();
                            console.log('Payment confirmation result:', confirmResult);
                            
                            app.helper.hideProgress();
                            
                            if (confirmResult.success) {

                                const subscription = confirmResult.result.subscription;

                                updateSubscriptionUI(subscription);
                                
                                // Show success message
                                app.helper.showSuccessNotification({
                                    message: confirmResult.result.message || 'Upgrade completed successfully!',
                                    type: 'success'
                                });
                                
                                // Show success popup for upgrade
                                // showSubscriptionSuccessPopup(true);
                                
                               setTimeout(function () {
                                    // Add timestamp to prevent caching
                                    const timestamp = new Date().getTime();
                                    window.location.href = "index.php?module=MyAccount&parent=Settings&view=List&block=13&fieldid=46&t=" + timestamp;
                                }, 1000);
                            } else {
                                throw new Error(confirmResult.message || 'Payment confirmation failed');
                            }
                            
                        } catch (confirmError) {
                            console.error('Payment confirmation error:', confirmError);
                            app.helper.hideProgress();
                            app.helper.showErrorNotification({
                                message: 'Payment received but confirmation failed. Please contact support with Payment ID: ' + razorpayResponse.razorpay_payment_id
                            });
                        }
                    },
                    prefill: {
                        name: billingDetails.fullName,
                        contact: billingDetails.phone
                    },
                    notes: {
                        address: billingDetails.address,
                        city: billingDetails.city,
                        state: billingDetails.state,
                        zip: billingDetails.zip
                    },
                    theme: {
                        color: '#667eea'
                    },
                    modal: {
                        ondismiss: function() {
                            console.log('Payment modal closed');
                            app.helper.showErrorNotification({
                                message: 'Payment cancelled. Your upgrade is still scheduled but pending payment.'
                            });
                        }
                    }
                };
                
                const rzp = new Razorpay(options);
                rzp.open();
                
            } else if (data.upgrade_amount === 0 || data.is_downgrade) {
                // No payment needed - free upgrade or downgrade
                app.helper.showSuccessNotification({
                    message: data.message || "Upgrade completed successfully! No payment required.",
                    type: "success"
                });
                
                // Update UI immediately
                const subscription = {
                    plan_name: data.new_plan_name,
                    user_count: data.user_count,
                    amount: data.new_amount,
                    status: 'Active'
                };
                updateSubscriptionUI(subscription);
                
                setTimeout(function () {
                    // Add timestamp to prevent caching
                    const timestamp = new Date().getTime();
                    window.location.href = "index.php?module=MyAccount&parent=Settings&view=List&block=13&fieldid=46&t=" + timestamp;
                }, 1000);
                
            } else {
                
                app.helper.showSuccessNotification({
                    message: data.message || "Upgrade scheduled successfully!",
                    type: "success"
                });
                
                setTimeout(function () {
                    const timestamp = new Date().getTime();
                    window.location.href = "index.php?module=MyAccount&parent=Settings&view=List&block=13&fieldid=46&t=" + timestamp;
                }, 1000);
            }
            
        } catch (err) {
            console.error('Upgrade payment error:', err);
            app.helper.hideProgress();
            app.helper.showErrorNotification({
                message: err.message || "Upgrade failed. Please try again."
            });
        }
    }


    function forceMyAccountReload() {
        if (window.location.href.includes('module=MyAccount') && !window.location.href.includes('reloaded=true')) {
            const newUrl = window.location.href + (window.location.href.includes('?') ? '&' : '?') + 'reloaded=true';
            window.location.href = newUrl;
        }
    }


    function updateSubscriptionUI(subscription) {
        const banner = document.querySelector('.current-subscription-banner');
        if (banner) {
            const planInfo = banner.querySelector('.current-plan-info');
            if (planInfo) {
                planInfo.innerHTML = `
                    <h3>Current Plan: ${subscription.plan_name}</h3>
                    <p>Status: <span class="status-badge">${subscription.status}</span> | 
                    Billing: ${subscription.frequency || 'Quarterly'}</p>
                    ${subscription.next_billing_date ? `<p class="days-info">Next billing: <strong>${subscription.next_billing_date}</strong></p>` : ''}
                    <p class="amount-info">Current Amount: <strong>₹${subscription.amount.toFixed(2)}</strong></p>
                `;
            }
            
            banner.style.background = 'linear-gradient(135deg, #4CAF50 0%, #45a049 100%)';
            
            const upgradeBtn = banner.querySelector('.upgrade-btn');
            if (upgradeBtn) {
                upgradeBtn.innerHTML = '<span class="btn-icon">✓</span> Upgrade Complete';
                upgradeBtn.disabled = true;
                upgradeBtn.style.opacity = '0.7';
            }
        }
        
        // Show success animation
        showUpgradeSuccessAnimation();
    }

    // Success animation
    function showUpgradeSuccessAnimation() {
        const successHTML = `
            <div class="upgrade-success-overlay" style="
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.8);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 10000;
                animation: fadeIn 0.3s ease;
            ">
                <div class="upgrade-success-card" style="
                    background: white;
                    padding: 40px;
                    border-radius: 16px;
                    text-align: center;
                    max-width: 500px;
                    animation: slideUp 0.5s ease;
                ">
                    <div style="font-size: 64px; margin-bottom: 20px;">🎉</div>
                    <h2 style="color: #4CAF50; margin-bottom: 15px;">Upgrade Successful!</h2>
                    <p style="color: #666; font-size: 16px; margin-bottom: 10px;">Your subscription has been upgraded</p>
                    <p style="color: #333; font-size: 18px; font-weight: 600;">New Plan: ${currentSubscription ? upgradeCalculation.new_plan_name : 'Updated'}</p>
                    <p style="color: #999; font-size: 14px; margin-top: 20px;">Redirecting to your account...</p>
                </div>
            </div>
            <style>
                @keyframes fadeIn {
                    from { opacity: 0; }
                    to { opacity: 1; }
                }
                @keyframes slideUp {
                    from { transform: translateY(50px); opacity: 0; }
                    to { transform: translateY(0); opacity: 1; }
                }
            </style>
        `;
        
        document.body.insertAdjacentHTML('beforeend', successHTML);
        
        setTimeout(() => {
            const overlay = document.querySelector('.upgrade-success-overlay');
            if (overlay) overlay.remove();
        }, 3000);
    }

    function showSubscriptionSuccessPopup(isUpgrade = false) {
        // Get the plan name safely
        const planName = isUpgrade 
            ? (upgradeCalculation ? upgradeCalculation.new_plan_name : 'New Plan')
            : document.getElementById("summaryPlanName").textContent;
            
        const successHTML = `
            <div class="subscription-success-overlay" style="
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.8);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 10000;
                animation: fadeIn 0.3s ease;
            ">
                <div class="subscription-success-card" style="
                    background: white;
                    padding: 40px;
                    border-radius: 16px;
                    text-align: center;
                    max-width: 500px;
                    animation: slideUp 0.5s ease;
                    box-shadow: 0 10px 40px rgba(0,0,0,0.3);
                ">
                    <div style="font-size: 64px; margin-bottom: 20px; animation: bounce 1s ease;">🎉</div>
                    <h2 style="color: #4CAF50; margin-bottom: 15px; font-size: 28px;">
                        ${isUpgrade ? 'Upgrade Successful!' : 'Subscription Activated!'}
                    </h2>
                    <p style="color: #666; font-size: 16px; margin-bottom: 10px;">
                        ${isUpgrade ? 'Your subscription has been upgraded successfully' : 'Your subscription is now active'}
                    </p>
                    <p style="color: #333; font-size: 20px; font-weight: 600; margin: 20px 0;">
                        ${planName}
                    </p>
                    <div style="margin-top: 30px;">
                        <div class="loading-spinner" style="
                            display: inline-block;
                            width: 24px;
                            height: 24px;
                            border: 3px solid #f3f3f3;
                            border-top: 3px solid #4CAF50;
                            border-radius: 50%;
                            animation: spin 1s linear infinite;
                        "></div>
                        <p style="color: #999; font-size: 14px; margin-top: 15px;">
                            Redirecting to your account...
                        </p>
                    </div>
                </div>
            </div>
            <style>
                @keyframes fadeIn {
                    from { opacity: 0; }
                    to { opacity: 1; }
                }
                @keyframes slideUp {
                    from { transform: translateY(50px); opacity: 0; }
                    to { transform: translateY(0); opacity: 1; }
                }
                @keyframes bounce {
                    0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
                    40% { transform: translateY(-20px); }
                    60% { transform: translateY(-10px); }
                }
                @keyframes spin {
                    0% { transform: rotate(0deg); }
                    100% { transform: rotate(360deg); }
                }
            </style>
        `;
        
        document.body.insertAdjacentHTML('beforeend', successHTML);
        
        // Navigate to My Account after 2.5 seconds
        setTimeout(() => {
            const timestamp = new Date().getTime();
            window.location.replace("index.php?module=MyAccount&parent=Settings&view=List&block=13&fieldid=46&t=" + timestamp + "&refresh=1");
        }, 2500);
    }
    // document.head.appendChild();
});