$("#btn").on("click", function () {
    let search = $("#input").val().trim().toLowerCase();
    if (search === "") {
        $('#display').append("<p>* Please enter a name to search</p>");
    } else {

        //Create a json array
        let jsonObj = [
            {
                "Name": "Jane Doe",
                "Sex": "f",
                "Born": "1876",
                "Died": "1956",
                "Father": {
                    "First": "Petreus",
                    "Last": "Milliano"
                },
                "Mother": {
                    "First": "Sophia",
                    "Last": "Damme"
                }
            },
            {
                "Name": "Jane Ramirez",
                "Sex": "f",
                "Born": "1102",
                "Died": "--",
                "Father": {
                    "First": "Themistocles",
                    "Last": "Merovech"
                },
                "Mother": {
                    "First": "Amara",
                    "Last": "Floros"
                }
            },
            {
                "Name": "Gordon Mcclain",
                "Sex": "m",
                "Born": "1989",
                "Died": "--",
                "Father": {
                    "First": "Ricky",
                    "Last": "Kaiser"
                },
                "Mother": {
                    "First": "Tara",
                    "Last": "Weeks"
                }
            },
            {
                "Name": "Stephanie Olson",
                "Sex": "f",
                "Born": "1739",
                "Died": "1799",
                "Father": {
                    "First": "Alex",
                    "Last": "Lee"
                },
                "Mother": {
                    "First": "Mars",
                    "Last": "French"
                }
            },
            {
                "Name": "Kendra Macdonald",
                "Sex": "f",
                "Born": "1956",
                "Died": "1990",
                "Father": {
                    "First": "Damari",
                    "Last": "Calhoun"
                },
                "Mother": {
                    "First": "Noemi",
                    "Last": "Russo"
                }
            }
        ];

        let found = false;

        //Access to the json array
        $.each(jsonObj, function (result, key) {
            //If matched, display info
            if (key["Name"].toLowerCase().indexOf(search) > -1) {
                found = true;
                $('#display').append(
                    "<p>Name: " + key["Name"] + "<br>" +
                    "Sex: " + key["Sex"] + "<br>" +
                    "Born: " + key["Born"] + "<br>" +
                    "Died: " + key["Died"] + "<br>" +
                    "Father: " + key["Father"].First + " " + key["Father"].Last + "     <br>" +
                    "Mother: " + key["Mother"].First + " " + key["Mother"].Last + "     <br></p>");
            }
        })
        if (!found) {
            $('#display').html("<p>No match found</p>");
        }
    }

});

