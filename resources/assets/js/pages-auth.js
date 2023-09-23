/**
 *  Pages Authentication
 */

'use strict';


const formAuthentication = document.querySelector('#formAuthentication');

document.addEventListener('DOMContentLoaded', function (e) {
  (function () {
    // Form validation for Add new record
    if(lang == 'en'){
        var message = {
            username: {
                notEmpty: 'Please enter username',
                stringLength: 'Username must be more than 6 characters'
            },
            email: {
                notEmpty: 'Please enter your Username or Email',
                stringLength: 'Username or Email must be more than 6 characters'
            },
            emailUsername: {
                notEmpty: 'Please enter email / username',
                stringLength: 'Username must be more than 6 characters'
            },
            password: {
                notEmpty: 'Please enter your password',
                stringLength: 'Password must be more than 6 characters'
            },
            confirmPassword: {
                notEmpty: 'Please confirm password',
                identical: 'The password and its confirm are not the same',
                stringLength: 'Password must be more than 6 characters'
            },
            terms: {
                notEmpty: 'Please agree terms & conditions'
            }
        };
    } else if(lang == 'bn'){
        var message = {
            username: {
                notEmpty: 'অনুগ্রহ করে ব্যবহারকারীর নাম (ইউজারনেম) লিখুন',
                stringLength: 'ব্যবহারকারীর নাম(ইউজারনেম) অবশ্যই 6 অক্ষরের বেশি হতে হবে'
            },
            email: {
                notEmpty: 'অনুগ্রহ করে আপনার ইউজারনেম বা ইমেল লিখুন',
                stringLength: 'ইউজারনেম বা ইমেল অবশ্যই 6 অক্ষরের বেশি হতে হবে'
            },
            emailUsername: {
                notEmpty: 'অনুগ্রহ করে ইমেল/ইউজারনেম লিখুন',
                stringLength: 'ইউজারনেম অবশ্যই 6 অক্ষরের বেশি হতে হবে'
            },
            password: {
                notEmpty: 'অনুগ্রহ করে আপনার পাসওয়ার্ড লিখুন',
                stringLength: 'পাসওয়ার্ড অবশ্যই 6 অক্ষরের বেশি হতে হবে'
            },
            confirmPassword: {
                notEmpty: 'পাসওয়ার্ড নিশ্চিত করুন',
                identical: 'পাসওয়ার্ড এবং তার নিশ্চিতকরণ পাসওয়ার্ড এক নয়',
                stringLength: 'পাসওয়ার্ড অবশ্যই 6 অক্ষরের বেশি হতে হবে'
            },
            terms: {
                notEmpty: 'নিয়ম ও শর্তাবলী সম্মত করুন'
            }
        };

    } else {
        var message = {
            username: {
                notEmpty: 'Please enter username',
                stringLength: 'Username must be more than 6 characters'
            },
            email: {
                notEmpty: 'Please enter your Username or Email',
                stringLength: 'Username or Email must be more than 6 characters'
            },
            emailUsername: {
                notEmpty: 'Please enter email / username',
                stringLength: 'Username must be more than 6 characters'
            },
            password: {
                notEmpty: 'Please enter your password',
                stringLength: 'Password must be more than 6 characters'
            },
            confirmPassword: {
                notEmpty: 'Please confirm password',
                identical: 'The password and its confirm are not the same',
                stringLength: 'Password must be more than 6 characters'
            },
            terms: {
                notEmpty: 'Please agree terms & conditions'
            }
        };
    }

    if (formAuthentication) {
      const fv = FormValidation.formValidation(formAuthentication, {
        fields: {
          username: {
            validators: {
              notEmpty: {
                message: message.username.notEmpty
              },
              stringLength: {
                min: 6,
                message: message.username.stringLength
              }
            }
          },
          email: {
            validators: {
              notEmpty: {
                message: message.email.notEmpty
              },
              stringLength: {
                min: 6,
                message: message.email.stringLength
              }
            }
          },
          'email-username': {
            validators: {
              notEmpty: {
                message: message.emailUsername.notEmpty
              },
              stringLength: {
                min: 6,
                message: message.emailUsername.stringLength
              }
            }
          },
          password: {
            validators: {
              notEmpty: {
                message: message.password.notEmpty
              },
              stringLength: {
                min: 6,
                message: message.password.stringLength
              }
            }
          },
          'confirm-password': {
            validators: {
              notEmpty: {
                message: message.confirmPassword.notEmpty
              },
              identical: {
                compare: function () {
                  return formAuthentication.querySelector('[name="password"]').value;
                },
                message: message.confirmPassword.identical
              },
              stringLength: {
                min: 6,
                message: message.confirmPassword.stringLength
              }
            }
          },
          terms: {
            validators: {
              notEmpty: {
                message: message.terms.notEmpty
              }
            }
          }
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap5: new FormValidation.plugins.Bootstrap5({
            eleValidClass: '',
            rowSelector: '.mb-3'
          }),
          submitButton: new FormValidation.plugins.SubmitButton(),

          defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
          autoFocus: new FormValidation.plugins.AutoFocus()
        },
        init: instance => {
          instance.on('plugins.message.placed', function (e) {
            if (e.element.parentElement.classList.contains('input-group')) {
              e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
            }
          });
        }
      });
    }

    //  Two Steps Verification
    const numeralMask = document.querySelectorAll('.numeral-mask');

    // Verification masking
    if (numeralMask.length) {
      numeralMask.forEach(e => {
        new Cleave(e, {
          numeral: true
        });
      });
    }
  })();
});
