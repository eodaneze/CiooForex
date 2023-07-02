function paywithpaystack(){
        // e.preventDefault()
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var phone = document.getElementById('phone').value;
  const api = 'pk_live_34874a1fc595fb6da0634322599f949163067dc4';
  var reference = generateReference();
        
		var handler = PaystackPop.setup({
			key: api,
			email: email,
			amount: 100000, // Amount in kobo
			currency: "NGN",
			// ref: ''+Math.floor((Math.random() * 1000000000) + 1),
			ref: reference,
			firstname: name,
			metadata: {
				custom_fields: [
					{
						display_name: name,
						variable_name: name,
						value: phone,
					}
				]
			},
			callback: function(response){
				const referenced = response.reference;
                console.log(response);
				window.location.href='success.php?successfullypaid='+referenced;


			},
			onClose: function(){
				alert('window closed');
                // window.location.href='cancel.php'
			}
		});
		handler.openIframe();
	}

// Generate a unique reference for the transaction
function generateReference() {
  var reference = '';
  var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  var charactersLength = characters.length;
  
  for (var i = 0; i < 10; i++) {
    reference += characters.charAt(Math.floor(Math.random() * charactersLength));
  }
  
  return reference;
}






