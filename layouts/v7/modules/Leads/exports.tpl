{strip}
    <div class="row" style="margin: 15px 0;">
        <!-- Back Button -->
        <div class="col-md-2">
            <a href="index.php?module=Leads&view=CustomReportList" class="btn btn-default btn-block">
                <span class="glyphicon glyphicon-arrow-left"></span> Back
            </a>
        </div>

        <!-- Report Heading -->
        <div class="col-md-8 text-center">
            <h3 class="text-primary" style="margin-top: 5px;">{$REPORT_LABEL}</h3>
        </div>

        <!-- Export Buttons -->
        <div class="col-md-2 text-right">
            <button onclick="ExportToExcel('xlsx')" type="button" class="btn btn-success" title="Export to Excel">
                <span class="glyphicon glyphicon-download-alt"></span> XLSX
            </button>
            <button onclick="generatePDF()" type="button" class="btn btn-danger pdfgen" title="Export to PDF" style="margin-left: 5px;">
                <span class="glyphicon glyphicon-file"></span> PDF
            </button>
        </div>
    </div>
{/strip}