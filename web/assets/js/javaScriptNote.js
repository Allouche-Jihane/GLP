$(function () {

    $(document).on('click','#submit',function (e) {
        var searchIDs = $("input:checkbox:checked").map(function(){
            return $(this).val();
        }).get();
        var note = $('*[id^="note1_"]').map(function(){
            return $(this).val();
        }).get();
        var matiere  = $('#matiere').val();
        var Desc     = $('#Desc').val();
        $.ajax({
            url: Routing.generate('gestionNotes_new'),
            method: "post",
            data:{noteStudiant:searchIDs,note1:note,matiere:matiere,Desc:Desc,submited:true},
            success:function (responce) {
                var message = $('#message');
                console.log(responce);
                var  success = '<div class="alert alert-success" style="color: red">'+
                                    '<strong>Success!!</strong> '+
                                '</div>';

                var  error   = '<div class="alert alert-warning" style="color: red">'+
                                    '<strong>Warning ! </strong> rien à faire'+
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

}

);

function searchcne() {
    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("searchCNE");
    filter = input.value.toUpperCase();
    table = document.getElementById("notes");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function searchname() {
    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("searchNom");
    filter = input.value.toUpperCase();
    table = document.getElementById("notes");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function searchprenom() {
    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("searchPrenom");
    filter = input.value.toUpperCase();
    table = document.getElementById("notes");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}


function searchnote() {
    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("searchNote");
    filter = input.value.toUpperCase();
    table = document.getElementById("notes");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[3];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function searchdesc() {
    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("searchDesc");
    filter = input.value.toUpperCase();
    table = document.getElementById("notes");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[5];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function searchmatiere() {
    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("searchMatiere");
    filter = input.value.toUpperCase();
    table = document.getElementById("notes");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[4];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

