<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>A job form

    https://www.uuidgenerator.net/api/version1
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="form.css" />
</head>

<body>

    <div class="maindiv">


        <div class="formdiv">

            <div class="form_image">
            </div>

            <div class="form">
                <h2>ADD NEW JOB</h2>

                <form  method="POST" >

                    <div class="input-label">
                        <input type="text" id="F71BCCS055-jobtitle" name="name"  required><br />
                        <label for="jobtitle">job title</label><br />

                    </div>

                    <div class="input-label">
                        <input type="text" id="F71BCCS055-companyname" name="companyname" 
                            required><br />
                        <label for="companyname">company name:</label><br />

                    </div>

                    <div class="input-label">
                        <input type="email" id="F71BCCS055-companyemail" name="companyemail" 
                            required><br />
                        <label for="companyemail">company email</label><br />

                    </div>

                    <div class="input-label">
                        <input type="mininumeducation" id="F71BCCS055-mininumeducation" name="mininumeducation"
                             required /><br />
                        <label for="mininumeducation">mininum education:</label><br />

                    </div>

                    <div class="input-label">
                        <input type="text" id="F71BCCS055-requiredskills" name="requiredskills" 
                            required /><br />
                        <label for="requiredskills">Required Skills:</label><br />

                    </div>

                    <div class="input-label">
                        <input type="text" id="F71BCCS055-minimumexperience" name="minimumexperience" 
                            required><br />
                        <label for=" minimumexperience"> minimum experience:</label><br />

                    </div>
                    <div class="input-label">
                        <input type="text" id="F71BCCS055-maximumexperience" name="maximumexperience" 
                            required>
                        <br />
                        <label for=" maximumexperience">maximum experience:</label><br />

                    </div>
                    <div class="input-label">
                        <input type="textarea" id="F71BCCS055-Jobdescription" name="Jobdescription" 
                            required><br />
                        <label for=" Jobdescription">Job description:</label><br />

                    </div>
                    <div class="input-label">
                        <input type="text" id="F71BCCS055-salaryrange" name="salaryrange" required
                            ><br />
                        <label for="salaryrange">salary range:</label><br />

                    </div>
                    <div class="input-label">
                        <label for="lastdatetoapply">last date to apply:</label><br />
                        <input type="date" id="F71BCCS055-lastdatetoapply" name="lastdatetoapply" 
                            required><br />
                    </div>
                    <div>
                        <br> <br> <br> <input type="submit" class="submit-btn" onclick="senddata();" id="submit-button">
                    </div>
                </form>
            </div>


        </div>






        <script>
            function senddata() {

                jobtitle = $("#F71BCCS055-jobtitle").val();
                companyname = $("#F71BCCS055-companyname").val();
                companyemail = $("#F71BCCS055-companyemail").val();
                mininumeducation = $("#F71BCCS055-mininumeducation").val();
                requiredskills = $("#F71BCCS055-requiredskills").val();
                minimumexperience= $("#F71BCCS055-minimumexperience").val();
                maximumexperience= $("#F71BCCS055-maximumexperience").val();
                Jobdescription= $("#F71BCCS055-Jobdescription").val();
                salaryrange= $("#F71BCCS055-salaryrange").val();
                lastdatetoapply= $("#F71BCCS055-lastdatetoapply").val();

                alert(jobtitle+" "+companyname+" "+companyemail+" "+mininumeducation+" "+requiredskills+" "+minimumexperience+" "+maximumexperience+" "+Jobdescription+" "+salaryrange+" "+lastdatetoapply);

                $.ajax(

                    {

                        url: 'insert.php',
                        type: 'post',
                        data: {

                            jobtitlevar: jobtitle,
                            companynamevar: companyname,
                            companyemailvar: companyemail,
                            mininumeducationvar: mininumeducation,
                            requiredskillsvar: requiredskills,
                            minimumexperiencevar: minimumexperience,
                            maximumexperiencevar: maximumexperience,
                            Jobdescriptionvar: Jobdescription,
                            salaryrangevar: salaryrange,
                            lastdatetoapplyvar: lastdatetoapply
                            },
                        dataType: 'html',
                        


                        success: function(response) {
                            console.log(response);
                            alert(response);
                        },

                    }
                );

            }
        </script>






</body>

</html>