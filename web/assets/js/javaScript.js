$(function () {

    $(document).on('click','#submit',function (e) {
        var searchIDs = $("input:checkbox:checked").map(function(){
            return $(this).val();
    }).get();
        var matiere  = $('#matiere').val();
        var date     = $('#date').val();
        var nbrH     = $('#nbH').val();
        $.ajax({
            url: Routing.generate('gestionAbsence_new'),
            method: "post",
            data:{abcentSturent:searchIDs,matiere:matiere,date:date,nbrH:nbrH,submited:true},
            success:function (responce) {
                var message = $('#message');
                console.log(responce);
                var  success = '<div class="alert alert-success" style="color: red">'+
                                    '<strong>Success !!</strong>'+
                                '</div>';

                var  error   = '<div class="alert alert-warning" style="color: red">'+
                                    '<strong>Warning !! </strong> rien à faire'+
                                '</div>';
                if(responce =="success")
                {
                    message.html(success);

                }else if(responce =="error")
                {
                    message.html(error);
                }
            }
        });
    });

});
