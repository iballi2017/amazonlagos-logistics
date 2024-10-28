
function custom_phone() {
    const token = "6aba9ba4a4e4d7";
    // Initialize the intlTelInput on the phone input field
    const phoneInputFields = document.querySelectorAll(".phone");
    
    for (let i = 0; i < phoneInputFields.length; i++) {
        const phoneInputField = phoneInputFields[i];
        const phoneInput = phoneInputField && window?.intlTelInput(phoneInputField, {
            initialCountry: "auto",
            geoIpLookup: function (callback) {
                fetch(`https://ipinfo.io?token=${token}`) // Use your IP info service
                    .then(response => response.json())
                    .then(data => {
                        const countryCode = (data && data.country) ? data.country : "us";
                        callback(countryCode);
                    });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.js", // For formatting
        });

        phoneInputField && phoneInputField.addEventListener('blur', function () {
            const number = phoneInput && phoneInput.getNumber(); // Get full international number
            const countryData = phoneInput && phoneInput.getSelectedCountryData(); // Get selected country data
            console.log(`Full number: ${number}`);
            console.log(`Country: ${countryData.name}`);
        });

    }
}

custom_phone();