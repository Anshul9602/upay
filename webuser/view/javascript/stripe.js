//==============================================================================
// Stripe Payment Gateway v2022-2-22
// 
// Author: Clear Thinking, LLC
// E-mail: johnathan@getclearthinking.com
// Website: http://www.getclearthinking.com
// 
// All code within this file is copyright Clear Thinking, LLC.
// You may not copy or reuse code within this file without written permission.
//==============================================================================

function getQueryVariable(variable) {
	var vars = window.location.search.substring(1).split('&');
	for (i = 0; i < vars.length; i++) {
		var pair = vars[i].split('=');
		if (pair[0] == variable) return pair[1];
	}
	return false;
}

function stripeCapture(element, charge_amount, payment_intent_id) {
	var amount = prompt('Enter the amount to capture:', charge_amount.toFixed(2));
	
	var route = getQueryVariable('route');
	if (route.indexOf('|') == -1) {
		route = 'extension/payment/stripe/';
	} else {
		route = 'extension/stripe/payment/stripe|';
	}
	
	var token = getQueryVariable('token');
	token = (token) ? '&token=' + token : '&user_token=' + getQueryVariable('user_token');
	
	if (amount != null && amount > 0) {
		$.ajax({
			type: 'POST',
			url: 'index.php?route=' + route + 'capture' + token,
			data: {payment_intent_id: payment_intent_id, amount: amount},
			beforeSend: function() {
				element.after('<span id="please-wait" style="font-size: 11px"> Please wait...</span>');
			},
			success: function(error) {
				$('#please-wait').remove();
				if (error) {
					alert(error);
				}
				if (!error || error.indexOf('has already been captured') != -1) {
					element.prev().html('Yes (' + parseFloat(amount).toFixed(2) + ' captured)');
					element.remove();
				}
			},
			error: function(xhr, status, error) {
				alert(xhr.responseText ? xhr.responseText : error);
			}
		});
	}
}

function stripeRefund(element, charge_amount, charge_id) {
	var amount = prompt('Enter the amount to refund:', charge_amount.toFixed(2));
	
	var route = getQueryVariable('route');
	if (route.indexOf('|') == -1) {
		slashbar = '/';
		route = 'extension/payment/stripe/';
	} else {
		slashbar = '|';
		route = 'extension/stripe/payment/stripe|';
	}
	
	var token = getQueryVariable('token');
	token = (token) ? '&token=' + token : '&user_token=' + getQueryVariable('user_token');
	
	if (amount != null && amount > 0) {
		$.ajax({
			type: 'POST',
			url: 'index.php?route=' + route + 'refund' + token,
			data: {charge_id: charge_id, amount: amount},
			beforeSend: function() {
				element.after('<span id="please-wait" style="font-size: 11px"> Please wait...</span>');
			},
			success: function(error) {
				if (error) {
					alert(error);
					$('#please-wait').remove();
				} else {
					alert('Success!');
					setTimeout(function(){
						$('#history').load('index.php?route=sale/order' + slashbar + 'history&order_id=' + getQueryVariable('order_id') + token);
						$('#please-wait').remove();
					}, 2000);
				}
			},
			error: function(xhr, status, error) {
				alert(xhr.responseText ? xhr.responseText : error);
			}
		});
	}
}