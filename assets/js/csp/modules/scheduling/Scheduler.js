/**
 * Run Scheduler program (Scheduling module) JS
 *
 * @since 12.5
 *
 * @package Decan
 */

csp.modules.scheduling.scheduler = {
	msgDone: function() {
		// Display note after calculating daily attendance
		$('#message_div').html($('#message_div').data('msgDone'));
	}
}

csp.modules.scheduling.scheduler.msgDone();
