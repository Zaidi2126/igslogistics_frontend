function signUp() {
    // alert('Signed Up')
    first_name = $('#f-name').val()
    last_name = $('#l-name').val()
    email = $('#email').val()
    phone_number = $('#contact').val()
    country = $('#country').val()
    state = $('#state').val()
    city = $('#city').val()
    zipCode = $('#zip').val()
    street_address = $('#address').val()
    password = $('#password').val()
    confirm_password = $('#c-password').val()

    console.log(first_name)
    console.log(last_name)
    console.log(email)
    console.log(phone_number)
    console.log(country)
    console.log(state)
    console.log(city)
    console.log(zipCode)
    console.log(street_address)

    if (password != confirm_password) {
        alert('Passwords dont match!')
        return
    }

    $.ajax({
        type: "post",
        url: "http://127.0.0.1:8000/api/register",
        headers: {
            "Content-Type": "application/json"
        },
        data: JSON.stringify({

            "first_name": "zaidi",
            "last_name": "admin",
            "username": "f2019065209@umt.edu.pk",
            "contact": "055555777",
            "state": "Punjab",
            "city": "Lahore",
            "zip": "0000",
            "street": "14",
            "password": "12345678"

            //     "first_name": first_name,
            // "last_name": last_name,
            // "email": email,
            // "contact": phone_number,
            // "country": country,
            // "state": state,
            // "city": city,
            // "zip": zipCode,
            // "street": street_address,
            // "password": password
        }),
        success: function(data, text) {
            alert('Success, you can sign-in now...')
            window.location.replace('sign-in.php')
            return
        },
        error: function(request, status, error) {
            console.log(error, status)
            if (request.status == 409) {
                alert(request.responseJSON.detail)
            } else {
                alert(request.responseText)
            }
        }
    });

}