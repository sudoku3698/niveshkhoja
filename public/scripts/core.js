// Login User Functionality

 $("#loginForm").submit(function(e){

    e.preventDefault(); //not submit the form

    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
	
	console.log(postData); 	// Print Posted Data
	
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(data) 
        {
			console.log(data); // print Return Data
            
			if (data==1) {
 			
			  toastr.success('Login succesfully');
             // window.location.assign('profile.php');
			
			// Use Delay for display toaster notification
			  $('#loginForm').delay(100).show(0, function () {
					setTimeout(function () {
						location.href = 'dashboard.php'
					}, 1000);
				});
                
            }
            else{
	            toastr.error('Something Went Wrong, Please try Again.');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
            //if fails      
        }
    });
    
});




$(document).ready(function () {

 //Bank Data validatoin!
	 
	 $("#form_bank").validate({
         ignore: ":hidden",
         rules: {

				Bank_Category: {
                 required: true,
                 
				},

				Bank_Name: {
                 required: true,
                 minlength: 3
				},
				Bank_Address: {
                    required: true,
              
                },
				Bank_Contact: {
                    required: true,number: true
                    
                },
				Bank_IFSC_Code: {
                    required: true,
                    
                },

                Bank_Branch: {
                    required: true,
                    
                },
                Bank_MICR_Code: {
                    required: true,
                    
                },
                Bank_Email_ID: {
                    required: true,
                    
                },
                Bank_Website: {
                    required: true,
                    
                },
                Bank_Services_Offered: {
                    required: true,
                    
                },
                Bank_About: {
                    required: true,
                    
                },
				Bank_Year_Establish: {
                    required: true,
					number: true,
					minlength: 2,
					maxlength: 4,
                    
                },
				Bank_Review: {
                    required: true,
                    
				},
             message: {
                 required: true,
                 minlength: 10
             }
         },
         submitHandler: function (form) {

		$.ajax({
        type: $(form).attr('method'),
        url: $(form).attr('action'),
        data: $(form).serialize(),
        dataType : 'json'
		})
		.done(function (response) {
			if (response==1) {
			toastr.success('Succesfully Saved');
			document.getElementById("form_bank").reset();
         	
			}
			else{
				toastr.error('Something Went Wrong, Please try Again.');
			}        
		});
		return false; // required to block normal submit since you used ajax
		}
    });

});


 //Bank Data validatoin!

 $("#form_bank_edit").validate({
         ignore: ":hidden",
         rules: {

				Bank_Category: {
                 required: true,
                 
				},

				Bank_Name: {
                 required: true,
                 minlength: 3
				},
				Bank_Address: {
                    required: true,
              
                },
				Bank_Contact: {
                    required: true,number: true
                    
                },
				Bank_IFSC_Code: {
                    required: true,
                    
                },

                Bank_Branch: {
                    required: true,
                    
                },
                Bank_MICR_Code: {
                    required: true,
                    
                },
                Bank_Email_ID: {
                    required: true,
                    
                },
                Bank_Website: {
                    required: true,
                    
                },
                Bank_Services_Offered: {
                    required: true,
                    
                },
                Bank_About: {
                    required: true,
                    
                },
				Bank_Year_Establish: {
                    required: true,
					number: true,
					minlength: 2,
					maxlength: 4,
                    
                },
				Bank_Review: {
                    required: true,
                    
				},
             message: {
                 required: true,
                 minlength: 10
             }
         },
         submitHandler: function (form) {

		$.ajax({
        type: $(form).attr('method'),
        url: $(form).attr('action'),
        data: $(form).serialize(),
        dataType : 'json'
		})
		.done(function (response) {
			if (response==1) {
			toastr.success('Succesfully Updated');

			$('#form_bank_edit').delay(100).show(0, function () {
					setTimeout(function () {
						location.href = 'datatables.php'
					}, 1000);
				});
                
			//window.location.replace("datatables.php");
			}
			else{
				toastr.error("Thank You,Try Again Later");
				$('#form_bank_edit').delay(100).show(0, function () {
					setTimeout(function () {
						location.href = 'datatables.php'
					}, 1000);
				});
			}        
		});
		return false; // required to block normal submit since you used ajax
		}
    });


//Broker Subbroker Data Validatoin!

     $("#form_broker_subbroker").validate({
         ignore: ":hidden",
         rules: {
				Broker_Subcategory: { 
					required: true, },
				Broker_Contact: { 
					required: true,},
				Broker_Address: { 
					required: true, },
				Broker_Contact_Person: { 
					required: true,number: true },
				Broker_Registration_Number: { 
					required: true, },
				Broker_Stock_Exchange: { 
					required: true, },
				Broker_Category: { 
					required: true, },
				Broker_Recommending_Broker_Name: { 
					required: true, },
				Broker_Recommending_Broker_Reg_Number: { 
					required: true, },
				Broker_Email_ID: { 
 					required: true, },
				Broker_Website: { 
					required: true, },
                Broker_Services_Offered: {
                    required: true,},
                Broker_About: {
                    required: true,},
				Broker_Year_Establish: {
                    required: true,number: true,minlength: 2,
					maxlength: 4,},
				Broker_Review: {
                    required: true,},
             message: {
                 required: true,
                 minlength: 10
             }
         },
         submitHandler: function (form) {
			$.ajax({
				type: $(form).attr('method'),
				url: $(form).attr('action'),
				data: $(form).serialize(),
				dataType : 'json'
			})
			.done(function (response) {
			if (response==1) {
			toastr.success('Succesfully Saved');
			document.getElementById("form_broker_subbroker").reset();
         	
			}
			else{
				toastr.error('Something Went Wrong, Please try Again.');
			}         
			 });
			return false; // required to block normal submit since you used ajax
		}
     });


//Broker Subbroker Edit Data Validatoin!

	  $("#form_broker_subbroker_edit").validate({
         ignore: ":hidden",
         rules: {
				Broker_Subcategory: { 
					required: true, },
				Broker_Contact: { 
					required: true, },
				Broker_Address: { 
					required: true, },
				Broker_Contact_Person: { 
					required: true,number: true },
				Broker_Registration_Number: { 
					required: true, },
				Broker_Stock_Exchange: { 
					required: true, },
				Broker_Category: { 
					required: true, },
				Broker_Recommending_Broker_Name: { 
					required: true, },
				Broker_Recommending_Broker_Reg_Number: { 
					required: true, },
				Broker_Email_ID: { 
 					required: true, },
				Broker_Website: { 
					required: true, },
                Broker_Services_Offered: {
                    required: true,},
                Broker_About: {
                    required: true,},
				Broker_Year_Establish: {
                    required: true,number: true,minlength: 2,
					maxlength: 4,},
				Broker_Review: {
                    required: true,},
             message: {
                 required: true,
                 minlength: 10
             }
         },
         submitHandler: function (form) {
			$.ajax({
				type: $(form).attr('method'),
				url: $(form).attr('action'),
				data: $(form).serialize(),
				dataType : 'json'
			})
			.done(function (response) {
			if (response==1) {
			toastr.success('Succesfully Updated');

			$('#form_broker_subbroker_edit').delay(100).show(0, function () {
					setTimeout(function () {
						location.href = 'datatables.php'
					}, 1000);
				});
                
			//window.location.replace("datatables.php");
			}
			else{
				toastr.error("Thank You,Try Again Later");
				$('#form_broker_subbroker_edit').delay(100).show(0, function () {
					setTimeout(function () {
						location.href = 'datatables.php'
					}, 1000);
				});
			}          
			 });
			return false; // required to block normal submit since you used ajax
		}
     });




// CFA Data Validatoin!

$("#form_cfa").validate({
			ignore: ":hidden",
            rules: {
				CFA_Subcategory: {
                    required: true,
                   
                },
				CFA_Contact: {
                    required: true,
                   
                },
				CFA_Address: {
                    required: true,
                   
                },
				CFA_Contact_Person: {
                    required: true,number: true
                    
                },
				CFA_FPSBI_Number: {
                    required: true,
                    
                },

                CFA_Nature_of_Employment: {
                    required: true,
                    
                },
                CFA_Company_Name: {
                    required: true,
                   
                },
				CFA_Recommending_CFA_Name: {
                    required: true,
                   
                },
				CFA_Recommending_CFA_Reg_Number: {
                    required: true,
                    
                },
                CFA_Email_ID: {
                    required: true,
                  
                },
                CFA_Website: {
                    required: true,
                   
                },
                CFA_Services_Offered: {
                    required: true,
                    
                },
                CFA_About: {
                    required: true,
                   
                },
				CFA_Year_Establish: {
                    required: true,number: true,minlength: 2,
					maxlength: 4,
                   
                },
				CFA_Review: {
                    required: true,
                   
				}
            },
				
            submitHandler: function (form) {
			$.ajax({
				type: $(form).attr('method'),
				url: $(form).attr('action'),
				data: $(form).serialize(),
				dataType : 'json'
			})
			.done(function (response) {
			if (response==1) {
			toastr.success('Succesfully Saved');
			document.getElementById("form_cfa").reset();
         	
			}
			else{
				toastr.error('Something Went Wrong, Please try Again.');
			}         
			 });
			return false; // required to block normal submit since you used ajax
		}
     });




// CFA Data Validatoin!

$("#form_cfa_edit").validate({
			ignore: ":hidden",
            rules: {
				CFA_Subcategory: {
                    required: true,
                   
                },
				CFA_Contact: {
                    required: true,
                   
                },
				CFA_Address: {
                    required: true,
                   
                },
				CFA_Contact_Person: {
                    required: true,number: true
                    
                },
				CFA_FPSBI_Number: {
                    required: true,
                    
                },

                CFA_Nature_of_Employment: {
                    required: true,
                    
                },
                CFA_Company_Name: {
                    required: true,
                   
                },
				CFA_Recommending_CFA_Name: {
                    required: true,
                   
                },
				CFA_Recommending_CFA_Reg_Number: {
                    required: true,
                    
                },
                CFA_Email_ID: {
                    required: true,
                  
                },
                CFA_Website: {
                    required: true,
                   
                },
                CFA_Services_Offered: {
                    required: true,
                    
                },
                CFA_About: {
                    required: true,
                   
                },
				CFA_Year_Establish: {
                    required: true,number: true,minlength: 2,
					maxlength: 4,
                   
                },
				CFA_Review: {
                    required: true,
                   
				}
            },
				
            submitHandler: function (form) {
			$.ajax({
				type: $(form).attr('method'),
				url: $(form).attr('action'),
				data: $(form).serialize(),
				dataType : 'json'
			})
			.done(function (response) {
				if (response==1) {
			toastr.success('Succesfully Updated');

			$('#form_cfa_edit').delay(100).show(0, function () {
					setTimeout(function () {
						location.href = 'datatables.php'
					}, 1000);
				});
                
			//window.location.replace("datatables.php");
			}
			else{
				toastr.error("Thank You,Try Again Later");
				$('#form_cfa_edit').delay(100).show(0, function () {
					setTimeout(function () {
						location.href = 'datatables.php'
					}, 1000);
				});
				}   
			 });
			return false; // required to block normal submit since you used ajax
		}
     });


// Insurance Data Validatoin!

        $("#form_insurance").validate({
            rules: {
				Insurance_Subcategory: {
                    required: true,
                    
                },
				Insurance_Contact: {
                    required: true,
                    
                },
				Insurance_Address: {
                    required: true,
                    
                },
				Insurance_Contact_Person: {
                    required: true,number: true
                    
                },
				Insurance_Insurer: {
                    required: true,
                    
                },
                Insurance_License_Number: {
                    required: true,
                    
                },
                Insurance_Irds_URN: {
                    required: true,
                    
                },
				Insurance_Agent_ID: {
                    required: true,
                    
                },
                Insurance_Email_ID: {
                    required: true,
                    
                },
                Insurance_Website: {
                    required: true,
                    
                },
                Insurance_Services_Offered: {
                    required: true,
                    
                },
                Insurance_About: {
                    required: true,
                    
                },
				Insurance_Year_Establish: {
                    required: true,number: true,minlength: 2,
					maxlength: 4,
                    
                },
				Insurance_Review: {
                    required: true,
                    
				}
            },
			
			submitHandler: function (form) {
			$.ajax({
				type: $(form).attr('method'),
				url: $(form).attr('action'),
				data: $(form).serialize(),
				dataType : 'json'
			})
			.done(function (response) {
			if (response==1) {
			toastr.success('Succesfully Saved');
			document.getElementById("form_insurance").reset();
         	
			}
			else{
				toastr.error('Something Went Wrong, Please try Again.');
			}         
			 });
			return false; // required to block normal submit since you used ajax
		}
        });


// Insurance Edit Data Validatoin!

        $("#form_insurance_edit").validate({
            rules: {
				Insurance_Subcategory: {
                    required: true,
                    
                },
				Insurance_Contact: {
                    required: true,
                    
                },
				Insurance_Address: {
                    required: true,
                    
                },
				Insurance_Contact_Person: {
                    required: true,number: true
                    
                },
				Insurance_Insurer: {
                    required: true,
                    
                },
                Insurance_License_Number: {
                    required: true,
                    
                },
                Insurance_Irds_URN: {
                    required: true,
                    
                },
				Insurance_Agent_ID: {
                    required: true,
                    
                },
                Insurance_Email_ID: {
                    required: true,
                    
                },
                Insurance_Website: {
                    required: true,
                    
                },
                Insurance_Services_Offered: {
                    required: true,
                    
                },
                Insurance_About: {
                    required: true,
                    
                },
				Insurance_Year_Establish: {
                    required: true,number: true,minlength: 2,
					maxlength: 4,
                    
                },
				Insurance_Review: {
                    required: true,
                    
				}
            },
			
			submitHandler: function (form) {
			$.ajax({
				type: $(form).attr('method'),
				url: $(form).attr('action'),
				data: $(form).serialize(),
				dataType : 'json'
			})
			.done(function (response) {

				if (response==1) {
			toastr.success('Succesfully Updated');

			$('#form_insurance_edit').delay(100).show(0, function () {
					setTimeout(function () {
						location.href = 'datatables.php'
					}, 1000);
				});
                
			//window.location.replace("datatables.php");
			}
			else{
				toastr.error("Thank You,Try Again Later");
				$('#form_insurance_edit').delay(100).show(0, function () {
					setTimeout(function () {
						location.href = 'datatables.php'
					}, 1000);
				});
				}  
			   
			 });
			return false; // required to block normal submit since you used ajax
		}
        });



//Loan Data Validatoin!

$("#form_loan").validate({
            rules: {
				
				Loan_Subcategory: {
                    required: true,
                    
                },
				Loan_Contact: {
                    required: true,
                    
                },
				Loan_Address: {
                    required: true,
                    
                },
				Loan_Contact_Person: {
                    required: true,number: true
                    
                },
				Loan_Email_ID: {
                    required: true,
                    
                },
                Loan_Website: {
                    required: true,
                   
                },
                Loan_Services_Offered: {
                    required: true,
                   
                },
                Loan_About: {
                    required: true,
                    
                },
				Loan_Year_Establish: {
                    required: true,number: true,minlength: 2,
					maxlength: 4,
                   
                },
				Loan_Review: {
                    required: true,
                    
				}
            },
				
			submitHandler: function (form) {
			$.ajax({
				type: $(form).attr('method'),
				url: $(form).attr('action'),
				data: $(form).serialize(),
				dataType : 'json'
			})
			.done(function (response) {
			if (response==1) {
			toastr.success('Succesfully Saved');
			document.getElementById("form_loan").reset();
			}
			else{
				toastr.error('Something Went Wrong, Please try Again.');
			}        
			 });
			return false; // required to block normal submit since you used ajax
		}
	});

//Loan Edit Data Validatoin!

$("#form_loan_Edit").validate({
            rules: {
				
				Loan_Subcategory: {
                    required: true,
                    
                },
				Loan_Contact: {
                    required: true,
                    
                },
				Loan_Address: {
                    required: true,
                    
                },
				Loan_Contact_Person: {
                    required: true,number: true
                    
                },
				Loan_Email_ID: {
                    required: true,
                    
                },
                Loan_Website: {
                    required: true,
                   
                },
                Loan_Services_Offered: {
                    required: true,
                   
                },
                Loan_About: {
                    required: true,
                    
                },
				Loan_Year_Establish: {
                    required: true,number: true,minlength: 2,
					maxlength: 4,
                   
                },
				Loan_Review: {
                    required: true,
                    
				}
            },
				
			submitHandler: function (form) {
			$.ajax({
				type: $(form).attr('method'),
				url: $(form).attr('action'),
				data: $(form).serialize(),
				dataType : 'json'
			})
			.done(function (response) {
		
				if (response==1) {
			toastr.success('Succesfully Updated');

			$('#form_loan_Edit').delay(100).show(0, function () {
					setTimeout(function () {
						location.href = 'datatables.php'
					}, 1000);
				});
                
			//window.location.replace("datatables.php");
			}
			else{
				toastr.error("Thank You,Try Again Later");
				$('#form_loan_Edit').delay(100).show(0, function () {
					setTimeout(function () {
						location.href = 'datatables.php'
					}, 1000);
				});
				}  
			      
			 });
			return false; // required to block normal submit since you used ajax
		}
	});




// Mutual Fund Distributor Data Validatoin!

	$("#form_Mutual_Fund_Distributor").validate({
            rules: {
				Mutual_Fund_Distributor_Subcategory: {
                    required: true,
                    
                },
				Mutual_Fund_Distributor_Contact: {
                    required: true,
                    
                },
				Mutual_Fund_Distributor_Address: {
                    required: true,
                    
                },
				Mutual_Fund_Distributor_Contact_Person: {
                    required: true,number: true
                    
                },
				Mutual_Fund_Distributor_AMFI_Registration_Number: {
                    required: true,
                    
                },

                Mutual_Fund_Distributor_ARN_Validity: {
                    required: true,
                    
                },
                Mutual_Fund_Distributor_KYD: {
                    required: true,
                    
                },
				Mutual_Fund_Distributor_EUIN: {
                    required: true,
                    
                },
                Mutual_Fund_Distributor_Email_ID: {
                    required: true,
                    
                },
                Mutual_Fund_Distributor_Website: {
                    required: true,
                    
                },
                Mutual_Fund_Distributor_Services_Offered: {
                    required: true,
                    
                },
                Mutual_Fund_Distributor_About: {
                    required: true,
                    
                },
				Mutual_Fund_Distributor_Year_Establish: {
                    required: true,number: true,minlength: 2,
					maxlength: 4,
                   
                },
				Mutual_Fund_Distributor_Review: {
                    required: true,
                 
				}
            },
				
            submitHandler: function (form) {
			$.ajax({
				type: $(form).attr('method'),
				url: $(form).attr('action'),
				data: $(form).serialize(),
				dataType : 'json'
			})
			.done(function (response) {
			if (response==1) {
			toastr.success('Succesfully Saved');
			document.getElementById("form_Mutual_Fund_Distributor").reset();
			}
			else{
				toastr.error('Something Went Wrong, Please try Again.');
			}        
			 });
			return false; // required to block normal submit since you used ajax
		}
    
	});



// Mutual Fund Distributor Data Validatoin!

	$("#form_Mutual_Fund_Distributor_Edit").validate({
            rules: {
				Mutual_Fund_Distributor_Subcategory: {
                    required: true,
                    
                },
				Mutual_Fund_Distributor_Contact: {
                    required: true,
                    
                },
				Mutual_Fund_Distributor_Address: {
                    required: true,
                    
                },
				Mutual_Fund_Distributor_Contact_Person: {
                    required: true,number: true
                    
                },
				Mutual_Fund_Distributor_AMFI_Registration_Number: {
                    required: true,
                    
                },

                Mutual_Fund_Distributor_ARN_Validity: {
                    required: true,
                    
                },
                Mutual_Fund_Distributor_KYD: {
                    required: true,
                    
                },
				Mutual_Fund_Distributor_EUIN: {
                    required: true,
                    
                },
                Mutual_Fund_Distributor_Email_ID: {
                    required: true,
                    
                },
                Mutual_Fund_Distributor_Website: {
                    required: true,
                    
                },
                Mutual_Fund_Distributor_Services_Offered: {
                    required: true,
                    
                },
                Mutual_Fund_Distributor_About: {
                    required: true,
                    
                },
				Mutual_Fund_Distributor_Year_Establish: {
                    required: true,number: true,minlength: 2,
					maxlength: 4,
                   
                },
				Mutual_Fund_Distributor_Review: {
                    required: true,
                 
				}
            },
				
            submitHandler: function (form) {
			$.ajax({
				type: $(form).attr('method'),
				url: $(form).attr('action'),
				data: $(form).serialize(),
				dataType : 'json'
			})
			.done(function (response) {
				
				if (response==1) {
			toastr.success('Succesfully Updated');

			$('#form_Mutual_Fund_Distributor_Edit').delay(100).show(0, function () {
					setTimeout(function () {
						location.href = 'datatables.php'
					}, 1000);
				});
                
			//window.location.replace("datatables.php");
			}
			else{
				toastr.error("Thank You,Try Again Later");
				$('#form_Mutual_Fund_Distributor_Edit').delay(100).show(0, function () {
					setTimeout(function () {
						location.href = 'datatables.php'
					}, 1000);
				});
				}  
			      
			       
			 });
			return false; // required to block normal submit since you used ajax
		}
    
	});



// Post Office Data Validatoin!

	$("#form_Post_Office").validate({
            rules: {
				Post_Office_Subcategory: {
                    required: true,
                },
				Post_Office_Name: {
                    required: true,
                },
				Post_Office_Address: {
                    required: true,
                },
				Post_Office_Contact_Person: {
                    required: true,number: true
                },
				Post_Office_Pin_Code: {
                    required: true,
                },
                Post_Office_Type: {
                    required: true,
                },
                Post_Office_Delivery: {
                    required: true,
                },
				Post_Office_Region: {
                    required: true,
                },
				Post_Office_Circle: {
                    required: true,
                },
                Post_Office_Email_ID: {
                    required: true,
                },
                Post_Office_Website: {
                    required: true,
                },
                Post_Office_Services_Offered: {
                    required: true,
                },
                Post_Office_About: {
                    required: true,
                },
				Post_Office_Year_Establish: {
                    required: true,number: true,minlength: 2,
					maxlength: 4,
                },
				Post_Office_Review: {
                    required: true,
				}
            },
				
            submitHandler: function (form) {
			$.ajax({
				type: $(form).attr('method'),
				url: $(form).attr('action'),
				data: $(form).serialize(),
				dataType : 'json'
			})
			.done(function (response) {
			if (response==1) {
			toastr.success('Succesfully Saved');
			document.getElementById("form_Post_Office").reset();
			}
			else{
				toastr.error('Something Went Wrong, Please try Again.');
			}         
			 });
			return false; // required to block normal submit since you used ajax
		}
        });

// Post Office Data Validatoin!

	$("#form_Post_Office_Edit").validate({
            rules: {
				Post_Office_Subcategory: {
                    required: true,
                },
				Post_Office_Name: {
                    required: true,
                },
				Post_Office_Address: {
                    required: true,
                },
				Post_Office_Contact_Person: {
                    required: true,number: true
                },
				Post_Office_Pin_Code: {
                    required: true,
                },
                Post_Office_Type: {
                    required: true,
                },
                Post_Office_Delivery: {
                    required: true,
                },
				Post_Office_Region: {
                    required: true,
                },
				Post_Office_Circle: {
                    required: true,
                },
                Post_Office_Email_ID: {
                    required: true,
                },
                Post_Office_Website: {
                    required: true,
                },
                Post_Office_Services_Offered: {
                    required: true,
                },
                Post_Office_About: {
                    required: true,
                },
				Post_Office_Year_Establish: {
                    required: true,number: true,minlength: 2,
					maxlength: 4,
                },
				Post_Office_Review: {
                    required: true,
				}
            },
				
            submitHandler: function (form) {
			$.ajax({
				type: $(form).attr('method'),
				url: $(form).attr('action'),
				data: $(form).serialize(),
				dataType : 'json'
			})
			.done(function (response) {
			
				if (response==1) {
			toastr.success('Succesfully Updated');

			$('#form_Post_Office_Edit').delay(100).show(0, function () {
					setTimeout(function () {
						location.href = 'datatables.php'
					}, 1000);
				});
                
			//window.location.replace("datatables.php");
			}
			else{
				toastr.error("Thank You,Try Again Later");
				$('#form_Post_Office_Edit').delay(100).show(0, function () {
					setTimeout(function () {
						location.href = 'datatables.php'
					}, 1000);
				});
				}  
			          
			 });
			return false; // required to block normal submit since you used ajax
		}
        });


// Investment Advisors Data Validatoin!

$("#form_Investment_Advisors").validate({
            rules: {
				Investment_Advisors_Subcategory: {
                    required: true,
                   
                },
				Investment_Advisors_Name: {
                    required: true,
                    
                },
				Investment_Advisors_Address: {
                    required: true,
                    
                },
				Investment_Advisors_Contact: {
                    required: true,
                    
                },
				Investment_Advisors_Email_ID: {
                    required: true,
                    
                },
                Investment_Advisors_Website: {
                    required: true,
                    
                },
                Investment_Advisors_Services_Offered: {
                    required: true,
                    
                },
                Investment_Advisors_About: {
                    required: true,
                    
                },
				Investment_Advisors_Year_Establish: {
                    required: true,number: true,minlength: 2,
					maxlength: 4,
                    
                },
				Investment_Advisors_Review: {
                    required: true,
                    
				}
            },
				
            submitHandler: function (form) {
			$.ajax({
				type: $(form).attr('method'),
				url: $(form).attr('action'),
				data: $(form).serialize(),
				dataType : 'json'
			})
			.done(function (response) {
			if (response==1) {
			toastr.success('Succesfully Saved');
			document.getElementById("form_Investment_Advisors").reset();
			}
			else{
				toastr.error('Something Went Wrong, Please try Again.');
			}         
			 });
			return false; // required to block normal submit since you used ajax
		}
    });



// Investment Advisors Data Validatoin!

$("#form_Investment_Advisors_Edit").validate({
            rules: {
				Investment_Advisors_Subcategory: {
                    required: true,
                   
                },
				Investment_Advisors_Name: {
                    required: true,
                    
                },
				Investment_Advisors_Address: {
                    required: true,
                    
                },
				Investment_Advisors_Contact: {
                    required: true,
                    
                },
				Investment_Advisors_Email_ID: {
                    required: true,
                    
                },
                Investment_Advisors_Website: {
                    required: true,
                    
                },
                Investment_Advisors_Services_Offered: {
                    required: true,
                    
                },
                Investment_Advisors_About: {
                    required: true,
                    
                },
				Investment_Advisors_Year_Establish: {
                    required: true,number: true,minlength: 2,
					maxlength: 4,
                    
                },
				Investment_Advisors_Review: {
                    required: true,
                    
				}
            },
				
            submitHandler: function (form) {
			$.ajax({
				type: $(form).attr('method'),
				url: $(form).attr('action'),
				data: $(form).serialize(),
				dataType : 'json'
			})
			.done(function (response) {
			if (response==1) {
			toastr.success('Succesfully Updated');

			$('#form_Investment_Advisors_Edit').delay(100).show(0, function () {
					setTimeout(function () {
						location.href = 'datatables.php'
					}, 1000);
				});
                
			//window.location.replace("datatables.php");
			}
			else{
				toastr.error("Thank You,Try Again Later");
				$('#form_Investment_Advisors_Edit').delay(100).show(0, function () {
					setTimeout(function () {
						location.href = 'datatables.php'
					}, 1000);
				});
				}  
			    
			 });
			return false; // required to block normal submit since you used ajax
		}
    });





// Research Analyst Advisors Data Validatoin!

$("#form_Research_Analyst").validate({
            rules: {
				Research_Analyst_Subcategory: {
                    required: true,
                    
                },
				Research_Analyst_Contact: {
                    required: true,
                   
                },
				Research_Analyst_Address: {
                    required: true,
                    
                },
				Research_Analyst_Contact_Person: {
                    required: true,number: true
                   
                },
				Research_Analyst_Insurer: {
                    required: true,
                   
                },

                Research_Analyst_Registration_Number: {
                    required: true,
                    
                },
                Research_Analyst_Category: {
                    required: true,
                  
                },
				Research_Analyst_Registration_Valid_Upto: {
                    required: true,
                  
                },
                Research_Analyst_Email_ID: {
                    required: true,
                  
                },
                Research_Analyst_Website: {
                    required: true,
                    
                },
                Research_Analyst_Services_Offered: {
                    required: true,
                    
                },
                Research_Analyst_About: {
                    required: true,
                   
                },
				Research_Analyst_Year_Establish: {
                    required: true,number: true,minlength: 2,
					maxlength: 4,
                    
                },
				Research_Analyst_Review: {
                    required: true,
                    
				}
            },
				
            submitHandler: function (form) {
			$.ajax({
				type: $(form).attr('method'),
				url: $(form).attr('action'),
				data: $(form).serialize(),
				dataType : 'json'
			})
			.done(function (response) {
			if (response==1) {
			toastr.success('Succesfully Saved');
			document.getElementById("form_Research_Analyst").reset();
			}
			else{
				toastr.error('Something Went Wrong, Please try Again.');
			}         
			 });
			return false; // required to block normal submit since you used ajax
		}
	});



// Research Analyst Advisors Edit Data Validatoin!

$("#form_Research_Analyst_Edit").validate({
            rules: {
				Research_Analyst_Subcategory: {
                    required: true,
                    
                },
				Research_Analyst_Contact: {
                    required: true,
                   
                },
				Research_Analyst_Address: {
                    required: true,
                    
                },
				Research_Analyst_Contact_Person: {
                    required: true,number: true
                   
                },
				Research_Analyst_Insurer: {
                    required: true,
                   
                },

                Research_Analyst_Registration_Number: {
                    required: true,
                    
                },
                Research_Analyst_Category: {
                    required: true,
                  
                },
				Research_Analyst_Registration_Valid_Upto: {
                    required: true,
                  
                },
                Research_Analyst_Email_ID: {
                    required: true,
                  
                },
                Research_Analyst_Website: {
                    required: true,
                    
                },
                Research_Analyst_Services_Offered: {
                    required: true,
                    
                },
                Research_Analyst_About: {
                    required: true,
                   
                },
				Research_Analyst_Year_Establish: {
                    required: true,number: true,minlength: 2,
					maxlength: 4,
                    
                },
				Research_Analyst_Review: {
                    required: true,
                    
				}
            },
				
            submitHandler: function (form) {
			$.ajax({
				type: $(form).attr('method'),
				url: $(form).attr('action'),
				data: $(form).serialize(),
				dataType : 'json'
			})
			.done(function (response) {
			    if (response==1) {
			toastr.success('Succesfully Updated');

			$('#form_Research_Analyst_Edit').delay(100).show(0, function () {
					setTimeout(function () {
						location.href = 'datatables.php'
					}, 1000);
				});
                
			//window.location.replace("datatables.php");
			}
			else{
				toastr.error("Thank You,Try Again Later");
				$('#form_Research_Analyst_Edit').delay(100).show(0, function () {
					setTimeout(function () {
						location.href = 'datatables.php'
					}, 1000);
				});
				}  
			 });
			return false; // required to block normal submit since you used ajax
		}
	});



//Delete Record

function deleteRecord(id,table,name,colCount) {
	swal({
                        title:"Are you sure?",
                        text: "Your will not be able to recover this record!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "No, cancel!",
                        closeOnConfirm: false,
                        closeOnCancel: false },
                    function (isConfirm) {
                        if (isConfirm) {
							$.ajax({
							url: "delete.php",
							type: "POST",
							data:'id='+id+'&table='+table+'&name='+name,
							success: function(data){
								//alert(data);
							swal("Deleted!", "Your record has been deleted.", "success");
							 if(data == 0){
								 
								 $("#"+table+id).html("<td align='center' colspan="+colCount+">No data available in table</td>");
							 }else{
			 				 $("#"+table+id).remove();
							 }
							}
						});
                        } else {
                            swal("Cancelled", "Your record is safe :)", "error");
                        }
                    });
}

//Edit Record
function editRecord(id,form_name) {
	swal({
                        title:"Are you sure?",
                        text: "You want to edit this record!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3498db",
                        confirmButtonText: "Yes, Edit it"
                       },
                    function () {
						   window.location.replace(form_name+".php?tag=recinhydr1-21&hvadid=60349634414&hvpos=1t1&hvexid=&hvnetw=g&hvrand=17906522107312404714&hvpone&id="+id+"&hvptwo=&hvqmt=b&hvdev=c&ref=pd_sl_8ivhvbmqjp_b");
                    });
}

    $(function () {

        // Initialize Example 1
        $('#example1').dataTable( {
            "ajax": '../api/datatables.json',
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
            buttons: [
                {extend: 'copy',className: 'btn-sm'},
                {extend: 'csv',title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'print',className: 'btn-sm'}
            ]
        });

        
        // Initialize Example 2
        $('[id="example2"]').dataTable( {
        "scrollX": true
		});

        
    });


    $(function () {
        $('.demo4').click(function () {
            swal({
                        title: "Are you sure?",
                        text: "Your will not be able to recover this record!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it",
                        cancelButtonText: "No, cancel",
                        closeOnConfirm: false,
                        closeOnCancel: false },
                    function (isConfirm) {
                        if (isConfirm) {
                           swal("Deleted!", "Your record has been deleted.", "success");
                        } else {
                            swal("Cancelled", "Your record is safe :)", "error");
                        }
                    });
        });

        // Toastr options
        toastr.options = {
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-top-right",
            "closeButton": true,
            "toastClass": "animated fadeInDown",
        };

        $('.homerDemo1').click(function (){
            toastr.info('Info - This is a custom Homer info notification');
        });

        $('.homerDemo2').click(function (){
            toastr.success('Success - This is a Homer success notification');
        });

        $('.homerDemo3').click(function (){
            toastr.warning('Warning - This is a Homer warning notification');
        });

        $('.homerDemo4').click(function (){
            toastr.error('Error - This is a Homer error notification');
        });

    });

/* --End-- */