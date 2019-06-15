$(document).ready(function () {
    $("#ipPrice").keypress(NumberOnly);
    $("#ipPrepaid").keypress(NumberOnly);
    $("#ipTenor").keypress(NumberOnly);
    // $("#ipInterestRate").keypress(NumberOnly);

    $("#btnCalculate").click(Calculate);




    (function () {
        var dateEnd = $('.counting-container').attr('data-end');
        var dDate = new Date(dateEnd);
        
        var reRender = function () {
            var current = Date.now();
            var timing = Math.trunc((dDate.getTime() - current) / 1000);

            var days = Math.trunc(timing / 86400);
            timing = timing - days * 86400;

            var hours = Math.trunc(timing / (60 * 60));
            timing = timing - hours * 60 * 60;

            var minutes = Math.trunc(timing / 60);
            timing = timing - minutes * 60;

            var seconds = timing;

            $('.counting-digit.day1').text(Math.trunc(days / 10));
            $('.counting-digit.day2').text(days % 10);

            $('.counting-digit.hour1').text(Math.trunc(hours / 10));
            $('.counting-digit.hour2').text(hours % 10);

            $('.counting-digit.min1').text(Math.trunc(minutes / 10));
            $('.counting-digit.min2').text(minutes % 10);

            $('.counting-digit.sec1').text(Math.trunc(seconds / 10));
            $('.counting-digit.sec2').text(seconds % 10);
        }

        setInterval(reRender, 1000);
    })();


});

function Calculate() {
    var gia_xe = $('#ipPrice').val().replace(/,/g, '');
    var so_tien_thanh_toan = $('#ipPrepaid').val().replace(/,/g, '');
    var lai_suat = $('#ipInterestRate').val();
    var thoi_han_vay = $('#ipTenor').val();

    var tien_goc_ban_dau = gia_xe - so_tien_thanh_toan;
    var du_no_cuoi_ky = tien_goc_ban_dau;
    var tra_goc = du_no_cuoi_ky / thoi_han_vay;
    var tong_tra_lai = 0;
    var tong_goc_lai = 0;

    var html = '<table id="ket-qua-tinh-tien" class="table table-bordered table-hover table-striped">';
    html += '<thead>';
    html += '<tr class="tieu-de">';
    html += '<th>Tháng</th>';
    html += '<th>Tiền vay còn lại</th>';
    html += '<th>Vốn gốc</th>';
    html += '<th>Tiền lãi</th>';
    html += '<th>Gốc + Lãi</th>';
    html += '</thead>';

    html += '<tbody>';
    html += '</tr>';
    html += '<tr><td colspan="4" style="text-align:left;">Tiền gốc còn lại ban đầu</td><td>' + FormatCurrency(tien_goc_ban_dau) + '</td></tr>';
    for (var i = 1; i <= thoi_han_vay; i++) {
        var tra_lai = Math.round(((du_no_cuoi_ky * lai_suat) / 100) / 1000) * 1000;
        tong_tra_lai += tra_lai;
        var tong_cong = Math.round((tra_goc + tra_lai) / 1000) * 1000;
        tong_goc_lai += tong_cong;
        du_no_cuoi_ky = du_no_cuoi_ky - tra_goc;
        html += '<tr>';
        html += '<td style="text-align:center;" >' + i + '</td>';
        html += '<td >' + FormatCurrency(du_no_cuoi_ky) + '</td>';
        html += '<td >' + FormatCurrency(tra_goc) + '</td>';
        html += '<td >' + FormatCurrency(tra_lai) + '</td>';
        html += '<td >' + FormatCurrency(tong_cong) + '</td>';

        html += '</tr>';
    }
    html += '</tbody>';

    html += '<tfoot>';
    html += '<tr class="tong-cong">';
    html += '<td colspan="2" style="text-align:center;">Tổng chi phí phải trả</td>';
    html += '<td>' + FormatCurrency(tien_goc_ban_dau) + '</td>';
    html += '<td>' + FormatCurrency(tong_tra_lai) + '</td>';
    html += '<td>' + FormatCurrency(tong_goc_lai) + '</td>';
    html += '</tr>';
    html += '</tfoot>';
    html += '</table>';
    html += '<p class="note">GHI CHÚ: Các giá trị trong bảng tính trên đây là giá trị ước tính và chỉ mang tính chất tham khảo nhằm mục đích cho bạn khái niệm về chi phí ước tính phải trả. <br/>Giá xe có thể thay đổi theo từng thời điểm. Để có thông tin và bảng tính chi phí chính xác, xin vui lòng liên hệ với chúng tôi</p>';
    $('#tResult').html(html);
}
function FormatNumber(obj) {
    var strvalue;
    if (eval(obj))
        strvalue = eval(obj).value;
    else
        strvalue = obj;
    var num;
    num = strvalue.toString().replace(/$|,/g, '');

    if (isNaN(num))
        num = "";
    sign = (num == (num = Math.abs(num)));
    num = Math.floor(num * 100 + 0.50000000001);
    num = Math.floor(num / 100).toString();
    for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3); i++)
        num = num.substring(0, num.length - (4 * i + 3)) + ',' +
            num.substring(num.length - (4 * i + 3));
    //return (((sign)?'':'-') + num); 
    eval(obj).value = (((sign) ? '' : '-') + num);
}
function FormatCurrency(num) {
    num = num.toString().replace(/$|,/g, '');
    if (isNaN(num))
        num = "0";
    sign = (num == (num = Math.abs(num)));
    num = Math.floor(num * 100 + 0.50000000001);
    num = Math.floor(num / 100).toString();
    for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3); i++)
        num = num.substring(0, num.length - (4 * i + 3)) + '.' +
            num.substring(num.length - (4 * i + 3));
    return (((sign) ? '' : '-') + num);
}
function NumberOnly(event) {
    if (event.which < 48 || event.which > 57) {
        if (event.which == 8 || event.which == 127) {
            return;
        }
        return false;
    }
}
