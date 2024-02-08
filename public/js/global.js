export function gs_sessionStorage(session,val) {
    if (typeof(Storage) !== "undefined") {
        sessionStorage.setItem(session, val);
    } else {
        console.log("Sorry, your browser does not support Web Storage...");
    }
}

export function gs_getItem(session,default_value=false){
    let item ='';

    if(default_value != false){
        item = sessionStorage.getItem(session) ? sessionStorage.getItem(session) :default_value;
    }else{
        item = sessionStorage.getItem(session);
    }
    return item;
}

export function gs_clearSession(name){
    for (var i = 0; i < name.length; i++) {
        var names = name[i];
        sessionStorage.removeItem(names);
    }
}

export function gs_swalToast(title,icon){

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

    Toast.fire({ icon: icon, title: title })
}

export function gs_Modal(modal_id,action='hide'){

    let modal = bootstrap.Modal.getOrCreateInstance(document.querySelector(modal_id));

    if(action == 'show'){
        modal.show();
    }else if(action == 'hide'){
        modal.hide();
        $('.modal-backdrop').remove()
    }
}

export function gs_SelectSearch(select,modal_id)
{
    $(select).select2({
        dropdownParent: $(modal_id)
    });
}

//  SELECT2 NO SEARCH
export async function gs_Select(div='.form-select1',modal_id){

    let element = $(div);

    element.select2({
        width: '100%',
        minimumResultsForSearch: Infinity,
        dropdownParent: $(modal_id)
    });

}

export function _pickDate(element,format,set_date=false){

    let date = '';

    date = flatpickr(element,{
        showMonths: true
    });

    if(set_date){
        date.setDate(new Date(set_date));
    }
}

export function _datePickr(element,format,set_date=false){

    new tempusDominus.TempusDominus(document.getElementById(element), {
        localization: {
            format: "MMMM/yyyy",
        },
        display: {
            viewMode: "calendar",
            components: {
                decades: false,
                year: true,
                month: true,
                date: false,
                hours: false,
                minutes: false,
                seconds: false
            },
            icons: {
                time: "ki-outline ki-time fs-1",
                date: "ki-outline ki-calendar fs-1",
                up: "ki-outline ki-up fs-1",
                down: "ki-outline ki-down fs-1",
                previous: "bi bi-arrow-left-short fs-1",
                next: "bi bi-arrow-right-short fs-1",
                today: "ki-outline ki-check fs-1",
                clear: "ki-outline ki-trash fs-1",
                close: "ki-outline ki-cross fs-1",
            },
        }
    });
}

