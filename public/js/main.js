$(function() {

  // f_location_update_delete();
  f_clickConfirm();
  f_lowerLimit_100data();
  f_withdrawal_dataCount();
  f_flashingWarning();


  // function f_location_update_delete() {
  //   $('.recordData').on('click', function() {
  //     var send_id = $(this).find('.sendLink').text();
  //     location.href = '/inventory_control/update_delete?send_id=' + send_id;
  //     // $("input[type='number'], input[type='submit']").hover(function(){
  //     //   return false;
  //   });
  // }


  function f_clickConfirm() {
    $('#updateBtn').on('click', ()=> {
      if (!confirm("データを更新しますか??" )) {
        return false;
      }
    });

    $('#deleteBtn').on('click', ()=> {
      if (!confirm("データを削除しますか??" )) {
        return false;
      }
    });

    $('.taikaiBtn').on('click', ()=> {
      if (!confirm('退会すると、登録している\nすべてのデータが削除されます。')) {
        return false;
      }
      if (!confirm("退会しますか??" )) {
        return false;
      }
    });

    $('.logout-links').on('click', function() {
      event.preventDefault();
      if (!confirm("ログアウトしますか？" )) {
        return false;
      }
      $('#logout-form').submit();
    });
  }


  function f_lowerLimit_100data() {
    if(location.pathname == "/inventory_control/data_register") {
      var userInfoCount = $('#userInfoCount').text();
      if (userInfoCount >= 100) {
        alert('データ数は１００までしか登録できません。');
        window.location.href = '/inventory_control';
      }
    }
  }


  function f_withdrawal_dataCount() {
    if(location.pathname == "/inventory_control/withdrawal") {
      $('.dataCount').hide();
    }
  }


  function f_flashingWarning() {
    setInterval(function(){
      $('.flashingWarning').fadeOut(1200).fadeIn(1800);
    },500);
  }


});
