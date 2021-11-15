// Define spreadsheet URL.
var mySpreadsheet = 'https://docs.google.com/spreadsheets/d/1D087G5j0IudRXHat0ALA5FkUKEnEpXP37QoP0H_ZnhI/edit#gid=1199884829';

// Load top ten switch hitters.
$('#example1').sheetrock({
  url: mySpreadsheet,
  query: ("select A,B,C,D,E,F,G,H,I,J offset 0"),
}).on('sheetrock:loaded', function () {
  $(this).DataTable({

    responsive: true,
    colReorder: true,
    lengthMenu: [[10, 20, 50, 100, -1], [10, 20, 50, 100, "ทั้งหมด"]],
    order: [[0, "desc"], [1, "asc"], [2, "asc"]],
    //sPaginationType: "full_numbers",
    // กำหนดหัวคอลัมภ์โดยตั้งชื่อเอง
    columns: [
      { title: "ลำดับ" },
      { title: "เวลา" },
      { title: "เบอร์ที่แจ้ง" },
      { title: "อาคาร/คณะ/หน่ายงาน" },
      { title: "ห้อง" },
      { title: "ชื่อผู้แจ้ง" },
      { title: "เบอร์ติดต่อกลับ" },
      { title: "อาการเสีย" },
      { title: "การดำเนินการ" },
      {"title":"รายละเอียด" ,"render": function(data, type, row, meta){
            if(type === 'display'){
                data = '<a href="' + data + '" target="_blank"><img src = "https://drive.google.com/uc?id=1QP-lNUBj1VFBxbUri8IQoHN42lnXROa4" width="30px"> </a>';
}
            return data;
           }
         }
       ],
    language: {
      sProcessing: "กำลังดำเนินการ...",
      sLengthMenu: "แสดง_MENU_ แถว",
      sZeroRecords: "ไม่พบข้อมูล",
      sInfo: "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
      sInfoEmpty: "แสดง 0 ถึง 0 จาก 0 แถว",
      sInfoFiltered: "(กรองข้อมูล _MAX_ ทุกแถว)",
      sInfoPostFix: "",
      sSearch: "ค้นหา:",
      sUrl: "",
      oPaginate: {
        sFirst: "หน้าแรก",
        sPrevious: "ก่อนหน้า",
        sNext: "ถัดไป",
        sLast: "หน้าสุดท้าย"
      }

    },

  }

);
});
