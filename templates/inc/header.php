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