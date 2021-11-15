// Define spreadsheet URL.
var mySpreadsheet = 'https://docs.google.com/spreadsheets/d/1X_JtZPc1ENBuQ9PIHmdTcZdn96D3usobwRMzhMqNL58/edit#gid=2127303305';

// Load top ten switch hitters.
$('#example').sheetrock({
  url: mySpreadsheet,
  query: ("select A,B,C,D offset 1"),
}).on('sheetrock:loaded', function () {
  $(this).DataTable({

    responsive: true,
    colReorder: true,
    lengthMenu: [[10, 20, 50, 100, -1], [10, 20, 50, 100, "ทั้งหมด"]],
    order: [[0, "desc"], [1, "asc"], [2, "asc"]],
    //sPaginationType: "full_numbers",
    // กำหนดหัวคอลัมภ์โดยตั้งชื่อเอง
    columns: [
      { title: "ภายใน " },
      { title: "คณะ/หน่ายงาน" },
      { title: "ห้อง" },
      { title: "เบอร์ตรง" },
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
