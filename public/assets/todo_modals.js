$(document).on('click', '.updateTodo', function(){
    
    let task = $(this).data('task');
    let priority = $(this).data('priority');
    let state = $(this).data('state');
    let taskId = $(this).data('task_id');
    
    switch(priority){
        case "Elévé":
            $('#priority_modified').val("1").change();
            break;

        case "Moyenne":
            $('#priority_modified').val("2").change();
            break;

        case "Faible":
            $('#priority_modified').val("3").change();
            break;
    }
    if(state == ""){
        $('#state_modified').val("0").change();
    }else{
        $('#state_modified').val("1").change();
    }

    $('#task_id').val(taskId);

    $('#task_modified').val(task);
});