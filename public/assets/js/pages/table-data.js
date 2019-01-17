$(document).ready(function() {
    $('#example').DataTable({
        language: {
            searchPlaceholder: 'جستجو ...',
            sSearch: '',
            sLengthMenu: 'نمایش _MENU_',
            sLength: 'dataTables_length',
            Show: "نمایش",
            EmptyTable: "هیچ داده ای در جدول وجود ندارد",
            info: "نمایش _START_ تا _END_ از _TOTAL_ رکورد",
            InfoEmpty: "نمایش 0 تا 0 از 0 رکورد",
            InfoFiltered: "(فیلتر شده از _MAX_ رکورد)",
            InfoPostFix: "",
            InfoThousands: ",",
            LengthMenu: "نمایش _MENU_ رکورد",
            LoadingRecords: "در حال بارگزاری...",
            Processing: "در حال پردازش...",
            Search: "جستجو:",
            ZeroRecords: "رکوردی با این مشخصات پیدا نشد",
            Aria: {
                SortAscending: ": فعال سازی نمایش به صورت صعودی",
                SortDescending: ": فعال سازی نمایش به صورت نزولی"
            },
            oPaginate: {
                sFirst: '<i class="material-icons">chevron_right</i>',
                sPrevious: '<i class="material-icons">chevron_right</i>',
                sNext: '<i class="material-icons">chevron_left</i>',
                sLast: '<i class="material-icons">chevron_left</i>'
            }
        }
    });

    $('.dataTables_length select').addClass('browser-default');
});