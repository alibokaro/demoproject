
    //display modal form for student editing
    $(document).on('click','.open_modal',function(){
        var student_id = $(this).val();
       
        $.get('getEditStudent' + '/' + student_id, function (data) {
            //success data
            console.log(data);
            $('#student_id').val(data.id);
            $('#stname').val(data.name);
            $('#city').val(data.city);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });
    
    //delete student and remove it from list
    $(document).on('click','.delete-student',function(){
        var student_id = $(this).val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "GET",
            url: 'delete' + '/' + student_id,
            success: function (data) {
                console.log(data);

        toastr.error('Student record Deleted..!', 'Inconceivable', {timeOut: 5000})
                $("#students" + student_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
    //create new student / update existing student
    $(".btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault(); 
         var form = $('#addStudent'); 
         var formID='#addStudent';
        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $(this).val();
        var type = "POST"; //for creating new resource
        var student_id = $('#student_id').val();;
        var my_url = 'add';
        if (state == "update"){
          
            type = "PUT"; //for updating existing resource
            my_url += 'edit/' + student_id;
            form=$('#editForm');
            formID='#editForm'
        }
       // console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: form.serialize(),
            dataType: 'json',
            success: function (data) {
                console.log(data);

                var students = '<tr id="students' + data.id + '"><td>' + data.name + '</td><td>' + data.city + '</td>';

                students += '<td><div class="btn-group"><button class="btn btn-primary open_modal" value="' + data.id + '"><i class="icon_plus_alt2"></i></button>';
                students += ' <button class="btn btn-danger delete-student" value="' + data.id + '"><i class="icon_close_alt2"></i></button></div></td></tr>';
               
               if (state == "Add Student"){ //if user added a new record
                toastr.success('Student record Added..!', 'Success Alert', {timeOut: 5000});
                    $('#studentsList').append(students);
                }else{ //if user updated an existing record

        toastr.info('Student record updated..!', 'Information', {timeOut: 5000})
                    $("#students"+student_id).replaceWith(students);
                }
                $(''+formID+' input[type="text"]').next("span").remove();
                $('#addStudent').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
                $('input[type="text"]').next("span").remove();
                $.each(data.responseJSON, function(index, val) {
                 console.log(index+","+val);
                 $(''+formID+' input[name='+index+']').after('<span class="text-danger">'+val+'</span>');
            });
            }
        });
    });
