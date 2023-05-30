$("#modalonload").validate({
  rules: {
    onload_name: {
required: true,
},
onload_email: {
required: true,
email: true
},
onload_mobile: { required: true,
        digits : true,
        minlength : 10,
        maxlength : 10 }
  },
  onload_terms: {
    required: true,
    },
messages: {
  onload_name : {
     required : 'Please enter full name'
  },
  onload_email: {
  required: "We need your email address to contact you",
  email: "Your email address must be in the format of name@domain.com"
},
onload_mobile: {
                  required : 'Mobile number is required',
number:"Provide mobile number",
digits : 'Enter numbers only',
minlength : 'Enter a 10 digits phone number',
       maxlength : 'Enter a 10 digits phone number'
              },
              onload_terms : {
                required : 'Please enter accept terms and conditions'
             }
          },
  tooltip_options: {
     thefield: { placement: 'bottom' }
  }
});

$("#downloadcurm").validate({
  rules: {
    download_name: {
required: true,
},
download_email: {
required: true,
email: true
},
download_mobile: { required: true,
        digits : true,
        minlength : 10,
        maxlength : 10 }
  },
  download_terms: {
    required: true,
    },
messages: {
  download_name : {
     required : 'Please enter full name'
  },
  download_email: {
  required: "We need your email address to contact you",
  email: "Your email address must be in the format of name@domain.com"
},
download_mobile: {
                  required : 'Mobile number is required',
number:"Provide mobile number",
digits : 'Enter numbers only',
minlength : 'Enter a 10 digits phone number',
       maxlength : 'Enter a 10 digits phone number'
              },
              download_terms : {
                required : 'Please enter accept terms and conditions'
             }
          },
          
  tooltip_options: {
     thefield: { placement: 'bottom' }
  }
});	

$("#classroom").validate({
  rules: {
    classroom_name: {
required: true,
},
classroom_email: {
required: true,
email: true
},
classroom_mobile: { required: true,
        digits : true,
        minlength : 10,
        maxlength : 10 }
  },
  classroom_classtype: {
    required: true,
    },
  classroom_terms: {
    required: true,
    },
messages: {
  classroom_name : {
     required : 'Please enter full name'
  },
  classroom_email: {
  required: "We need your email address to contact you",
  email: "Your email address must be in the format of name@domain.com"
},
classroom_mobile: {
                  required : 'Mobile number is required',
number:"Provide mobile number",
digits : 'Enter numbers only',
minlength : 'Enter a 10 digits phone number',
       maxlength : 'Enter a 10 digits phone number'
              },
              classroom_classtype : {
                required : 'Please select class type'
             },
              classroom_terms : {
                required : 'Please enter accept terms and conditions'
             }
          },
          
  tooltip_options: {
     thefield: { placement: 'bottom' }
  }
});	



$("#online").validate({
  rules: {
    online_name: {
required: true,
},
online_email: {
required: true,
email: true
},
online_mobile: { required: true,
        digits : true,
        minlength : 10,
        maxlength : 10 }
  },
  online_classtype: {
    required: true,
    },
  online_terms: {
    required: true,
    },
messages: {
  online_name : {
     required : 'Please enter full name'
  },
  online_email: {
  required: "We need your email address to contact you",
  email: "Your email address must be in the format of name@domain.com"
},
online_mobile: {
                  required : 'Mobile number is required',
number:"Provide mobile number",
digits : 'Enter numbers only',
minlength : 'Enter a 10 digits phone number',
       maxlength : 'Enter a 10 digits phone number'
              },
              online_classtype : {
                required : 'Please select class type'
             },
              online_terms : {
                required : 'Please enter accept terms and conditions'
             }
          },
          
  tooltip_options: {
     thefield: { placement: 'bottom' }
  }
});	


$("#combo").validate({
  rules: {
    combo_name: {
required: true,
},
combo_email: {
required: true,
email: true
},
combo_mobile: { required: true,
        digits : true,
        minlength : 10,
        maxlength : 10 }
  },
  combo_classtype: {
    required: true,
    },
  combo_terms: {
    required: true,
    },
messages: {
  combo_name : {
     required : 'Please enter full name'
  },
  combo_email: {
  required: "We need your email address to contact you",
  email: "Your email address must be in the format of name@domain.com"
},
combo_mobile: {
                  required : 'Mobile number is required',
number:"Provide mobile number",
digits : 'Enter numbers only',
minlength : 'Enter a 10 digits phone number',
       maxlength : 'Enter a 10 digits phone number'
              },
              combo_classtype : {
                required : 'Please select class type'
             },
              combo_terms : {
                required : 'Please enter accept terms and conditions'
             }
          },
          
  tooltip_options: {
     thefield: { placement: 'bottom' }
  }
});	

$("#webinor").validate({
  rules: {
    webinor_name: {
required: true,
},
webinor_email: {
required: true,
email: true
},
webinor_mobile: { required: true,
        digits : true,
        minlength : 10,
        maxlength : 10 }
  },
  webinor_terms: {
    required: true,
    },
messages: {
  webinor_name : {
     required : 'Please enter full name'
  },
  webinor_email: {
  required: "We need your email address to contact you",
  email: "Your email address must be in the format of name@domain.com"
},
webinor_mobile: {
                  required : 'Mobile number is required',
number:"Provide mobile number",
digits : 'Enter numbers only',
minlength : 'Enter a 10 digits phone number',
       maxlength : 'Enter a 10 digits phone number'
              },
              webinor_terms : {
                required : 'Please enter accept terms and conditions'
             }
          },
          
  tooltip_options: {
     thefield: { placement: 'bottom' }
  }
});