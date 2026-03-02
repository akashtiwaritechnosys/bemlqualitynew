/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

Vtiger_Detail_Js("Geolocation_Detail_Js", {}, {
    
    registerMap: function() {
        var mapContainer = jQuery('#geolocation-map');
        if (mapContainer.length === 0) {
            return;
        }

        var checkInLat = parseFloat(mapContainer.data('checkin-lat'));
        var checkInLng = parseFloat(mapContainer.data('checkin-lng'));
        var checkOutLat = parseFloat(mapContainer.data('checkout-lat'));
        var checkOutLng = parseFloat(mapContainer.data('checkout-lng'));

        var hasCheckIn = !isNaN(checkInLat) && !isNaN(checkInLng);
        var hasCheckOut = !isNaN(checkOutLat) && !isNaN(checkOutLng);

        if (!hasCheckIn && !hasCheckOut) {
            mapContainer.hide();
            return;
        }

        // Initialize map
        // Default center (will be fitBounds later)
        var map = L.map('geolocation-map').setView([0, 0], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var bounds = [];

        if (hasCheckIn) {
            var checkInMarker = L.marker([checkInLat, checkInLng]).addTo(map);
            checkInMarker.bindPopup("<b>Check-in Location</b><br>Lat: " + checkInLat + "<br>Lng: " + checkInLng);
             // Green icon for check-in? Leaflet default is blue. 
             // Let's use standard blue for now, or we can customize.
            bounds.push([checkInLat, checkInLng]);
        }

        if (hasCheckOut) {
            var checkOutMarker = L.marker([checkOutLat, checkOutLng]).addTo(map);
            checkOutMarker.bindPopup("<b>Check-out Location</b><br>Lat: " + checkOutLat + "<br>Lng: " + checkOutLng);
            
            // To differentiate, maybe modify icon color if possible, but default is fine for MVP.
            // Using a hack for red icon via hue-rotate filter could work, but let's stick to standard for first pass.
            
            bounds.push([checkOutLat, checkOutLng]);
        }

        if (bounds.length > 0) {
            map.fitBounds(bounds, { padding: [50, 50] });
            if (bounds.length === 1) {
                map.setZoom(15);
            }
        }
        
        // Fix for map not rendering correctly sometimes in tabs/hidden divs
        setTimeout(function(){ map.invalidateSize();}, 100);
    },

    registerEvents: function() {
        this._super();
        this.registerMap();
    }
});
