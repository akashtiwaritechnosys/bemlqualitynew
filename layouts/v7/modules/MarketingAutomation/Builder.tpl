{strip}
<div id="ma-builder-container" style="width:100%; height:80vh; background:#f4f6f9; position:relative; overflow:hidden; font-family:'Segoe UI',sans-serif; padding: 20px; box-sizing: border-box; margin-top: 55px;">
	<div class="ma-sidebar" style="width:250px; height:100%; background:#fff; border-radius:8px; float:left; padding:20px; box-shadow:2px 0 5px rgba(0,0,0,0.05); z-index:10; position:relative; margin-right: 20px; overflow-y: auto;">
		<a href="index.php?module=MarketingAutomation&view=Detail&record={$RECORD_ID}" style="display:inline-block; margin-bottom:15px; color:#555; text-decoration:none; font-size:13px; font-weight:500;">
			<i class="fa fa-arrow-left" style="margin-right:5px;"></i> Back to Detail
		</a>
		<h3 style="margin-top:0; font-size:18px; color:#333; font-weight:600; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" title="{$CAMPAIGN_NAME}">{$CAMPAIGN_NAME}</h3>
		<hr>
		<p>Drag steps to canvas</p>
		<div class="ma-node-tool" draggable="true" data-type="send_email" style="padding:10px; margin-bottom:10px; background:#fff; border:1px solid #ccc; border-radius:4px; cursor:grab; display:flex; align-items:center; font-weight:500;">
			<i class="fa fa-envelope" style="margin-right:10px; color:#007bff;"></i> Send Email
		</div>
		<div class="ma-node-tool" draggable="true" data-type="send_sms" style="padding:10px; margin-bottom:10px; background:#fff; border:1px solid #ccc; border-radius:4px; cursor:grab; display:flex; align-items:center; font-weight:500;">
			<i class="fa fa-mobile" style="margin-right:10px; color:#e83e8c;"></i> Send SMS
		</div>
		<div class="ma-node-tool" draggable="true" data-type="wait" style="padding:10px; margin-bottom:10px; background:#fff; border:1px solid #ccc; border-radius:4px; cursor:grab; display:flex; align-items:center; font-weight:500;">
			<i class="fa fa-clock-o" style="margin-right:10px; color:#ffc107;"></i> Wait
		</div>
		<div class="ma-node-tool" draggable="true" data-type="condition" style="padding:10px; margin-bottom:10px; background:#fff; border:1px solid #ccc; border-radius:4px; cursor:grab; display:flex; align-items:center; font-weight:500;">
			<i class="fa fa-code-fork" style="margin-right:10px; color:#6f42c1;"></i> Condition
		</div>
		<div class="ma-node-tool" draggable="true" data-type="change_score" style="padding:10px; margin-bottom:10px; background:#fff; border:1px solid #ccc; border-radius:4px; cursor:grab; display:flex; align-items:center; font-weight:500;">
			<i class="fa fa-star" style="margin-right:10px; color:#28a745;"></i> Change Score
		</div>
		<div class="ma-node-tool" draggable="true" data-type="ab_split" style="padding:10px; margin-bottom:10px; background:#fff; border:1px solid #ccc; border-radius:4px; cursor:grab; display:flex; align-items:center; font-weight:500;">
			<i class="fa fa-random" style="margin-right:10px; color:#6610f2;"></i> A/B Split
		</div>
		<div class="ma-node-tool" draggable="true" data-type="update_field" style="padding:10px; margin-bottom:10px; background:#fff; border:1px solid #ccc; border-radius:4px; cursor:grab; display:flex; align-items:center; font-weight:500;">
			<i class="fa fa-pencil-square-o" style="margin-right:10px; color:#17a2b8;"></i> Update Field
		</div>
		<div class="ma-node-tool" draggable="true" data-type="webhook" style="padding:10px; margin-bottom:10px; background:#fff; border:1px solid #ccc; border-radius:4px; cursor:grab; display:flex; align-items:center; font-weight:500;">
			<i class="fa fa-globe" style="margin-right:10px; color:#343a40;"></i> Webhook
		</div>
		<div class="ma-node-tool" draggable="true" data-type="create_task" style="padding:10px; margin-bottom:10px; background:#fff; border:1px solid #ccc; border-radius:4px; cursor:grab; display:flex; align-items:center; font-weight:500;">
			<i class="fa fa-calendar-check-o" style="margin-right:10px; color:#ffce34;"></i> Create Task
		</div>
		<div class="ma-node-tool" draggable="true" data-type="notify_user" style="padding:10px; margin-bottom:10px; background:#fff; border:1px solid #ccc; border-radius:4px; cursor:grab; display:flex; align-items:center; font-weight:500;">
			<i class="fa fa-bell" style="margin-right:10px; color:#f44336;"></i> Notify User
		</div>
		<div class="ma-node-tool" draggable="true" data-type="end" style="padding:10px; margin-bottom:10px; background:#fff; border:1px solid #ccc; border-radius:4px; cursor:grab; display:flex; align-items:center; font-weight:500;">
			<i class="fa fa-stop-circle" style="margin-right:10px; color:#dc3545;"></i> End
		</div>

		<button class="btn-primary-custom" onclick="saveGraph()" style="background:#158cba; color:#fff; border:none; padding:10px 20px; border-radius:4px; cursor:pointer; width:100%; margin-top:20px;">
			Save Workflow
		</button>
		<div id="save-status" style="margin-top:10px; color:green;"></div>
		
		<hr style="margin:20px 0;">
		<div id="property-panel"></div>
	</div>
	
	<div class="ma-canvas" id="canvas" ondrop="drop(event)" ondragover="allowDrop(event)" style="width:calc(100% - 270px); height:100%; float:left; position:relative; background-color: #fff; background-image:radial-gradient(#dfe3e8 1px, transparent 1px); background-size:20px 20px; border-radius: 8px; box-shadow: 0 0 5px rgba(0,0,0,0.05);">
		<svg id="ma-connections" style="position:absolute; top:0; left:0; width:100%; height:100%; pointer-events:none; z-index:1;"></svg>
	</div>
</div>

<!-- Condition Edit Modal -->
<div id="condition-modal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:9999; align-items:center; justify-content:center;">
	<div style="background:#fff; padding:30px; border-radius:8px; width:400px; box-shadow:0 10px 30px rgba(0,0,0,0.3);">
		<h3 style="margin-top:0;">Configure Condition</h3>
		<form id="condition-form">
			<div style="margin-bottom:15px;">
				<label style="display:block; margin-bottom:5px; font-weight:500;">Field Name</label>
				<input type="text" id="cond-field" placeholder="e.g., industry" style="width:100%; padding:8px; border:1px solid #ddd; border-radius:4px;">
			</div>
			<div style="margin-bottom:15px;">
				<label style="display:block; margin-bottom:5px; font-weight:500;">Operator</label>
				<select id="cond-operator" style="width:100%; padding:8px; border:1px solid #ddd; border-radius:4px;">
					<option value="=">=</option>
					<option value="!=">!=</option>
					<option value=">">&gt;</option>
					<option value="<">&lt;</option>
					<option value=">=">&gt;=</option>
					<option value="<=">&lt;=</option>
				</select>
			</div>
			<div style="margin-bottom:20px;">
				<label style="display:block; margin-bottom:5px; font-weight:500;">Value</label>
				<input type="text" id="cond-value" placeholder="e.g., Technology" style="width:100%; padding:8px; border:1px solid #ddd; border-radius:4px;">
			</div>
			<div style="text-align:right;">
				<button type="button" onclick="closeConditionModal()" style="padding:8px 20px; margin-right:10px; border:1px solid #ddd; background:#fff; border-radius:4px; cursor:pointer;">Cancel</button>
				<button type="submit" style="padding:8px 20px; background:#158cba; color:#fff; border:none; border-radius:4px; cursor:pointer;">Save</button>
			</div>
		</form>
	</div>
</div>

<style>
	.ma-node-tool:hover { box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
	
	.ma-node {
		position: absolute;
		width: 200px;
		background: #fff;
		border: 1px solid #bbb;
		border-radius: 8px;
		box-shadow: 0 4px 6px rgba(0,0,0,0.1);
		z-index: 5;
	}
	.ma-node-header {
		padding: 8px 12px;
		border-bottom: 1px solid #eee;
		font-weight: bold;
		background: #fafafa;
		border-radius: 8px 8px 0 0;
		cursor: move;
		display: flex;
		justify-content: space-between;
	}
	.ma-node-body {
		padding: 10px;
		font-size: 13px;
		color: #666;
	}
	.ma-port {
		width: 12px;
		height: 12px;
		background: #666;
		border-radius: 50%;
		position: absolute;
		left: 50%;
		transform: translateX(-50%);
		cursor: crosshair;
	}
	.ma-port.in { top: -6px; background: #4CAF50; }
	.ma-port.out { bottom: -6px; background: #2196F3; }

	path.connection {
		fill: none;
		stroke: #999;
		stroke-width: 2px;
		pointer-events: all;
	}
	path.connection:hover { stroke: #2196F3; cursor: pointer; }
</style>

<script>
	var CAMPAIGN_TYPE = "{$CAMPAIGN_TYPE}";
	var RECORD_ID = {$RECORD_ID};
	var GRAPH_DATA = {$GRAPH_DATA};
    var EMAIL_TEMPLATES_DATA = {$EMAIL_TEMPLATES};
    var EXISTING_NODES = GRAPH_DATA;
</script>
<script src="modules/MarketingAutomation/resources/builder.js?v={$smarty.now}"></script>
{/strip}
