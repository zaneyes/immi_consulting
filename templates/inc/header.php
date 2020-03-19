<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function(){
            // counter for assigning id for additional work form
            var cloneCounter = 1;
            $("input[name$='work_experience']").click(function() {
                var test = $(this).val();
                if(test == "yes") {
                    $("#workForm").show();
                    $('#one_more_job').show();
                } else {
                    $("#workForm").hide();
                    $('#one_more_job').hide();
                }
            });

            $("input[name$='ca_job_offer']").click(function() {
                var test = $(this).val();
                if(test == "yes") {
                    $("#job_offer_form").show();
                } else {
                    $("#job_offer_form").hide();
                }
            });

            $("input[name$='lmia_radio']").click(function() {
                var test = $(this).val();
                if(test == "no") {
                    $("#lmia_exempt_form").show();
                } else {
                    $("#lmia_exempt_form").hide();
                }
            });

            $("input[name$='family_radio']").click(function() {
                var test = $(this).val();
                if(test == "yes") {
                    $("#family_form").show();
                    $('#one_more_relative').show();
                } else {
                    $("#family_form").hide();
                    $('#one_more_relative').hide();
                }
            });

            $('#one_more_relative').on('click', function() {
                // clone form with not working remove button
                var clonedForm = $('#inside_family_form').clone();
                clonedForm.append('<input type="button" id="aaa" name="one_more_relative" value="Remove" ><br><br>');
                clonedForm.appendTo('#family_form');
                // -------------------
            });

            
            $('#one_more_job').on('click', function() {
                // clone form with not working remove button
                var clonedForm = $('#insideWorkForm').clone();
                clonedForm.append('<input type="button" id="aaa" name="one_more_job" value="Remove" ><br><br>');
                clonedForm.appendTo('#workForm');
                // -------------------
            });
            

          
        });
        

    </script>
    <link rel="stylesheet" type="text/css" href="res/css/main.css">
</head>
<body>