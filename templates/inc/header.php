<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("input[name$='work_experience']").click(function() {
                var test = $(this).val();
                if(test == "yes") {
                    $("#workForm").show();
                } else {
                    $("#workForm").hide();
                }
            });

            $("#work_experience_yes").click(function(){
                var test = $(this).val();
                if(test == "yes") {
                    $("#one_more_job").show();
                } else {
                    $("#one_more_job").hide();
                }
            });

            $("#work_experience_no").click(function(){
                $("#one_more_job").hide();
            });

            // $("#one_more_job").click(function() {
            //     var workForm = $("#workForm");
            //     var clone = workForm.clone();
            //     clone.appendTo(workForm);
            // });
            $('#one_more_job').on('click', function() {
                $('#insideWorkForm').clone().appendTo("#workForm");
            });
            
        });
        


        // function displayWorkForm() {
        //     var workForm = document.getElementsByName('work_experience');
        //     for(i=0; i<workForm.length; i++) {
        //         if(workForm[i].checked) {
        //             document.getElementById("workForm").innerHTML = 
        //         }
        //     }
        // }
        
    </script>
</head>
<body>