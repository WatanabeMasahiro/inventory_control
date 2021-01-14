$(function() {

  f_location_update_delete();
  f_clickConfirm();
  f_lowerLimit_100data();
  f_withdrawal_dataCount();
  f_flashingWarning();
  f_registerBtn();
  f_returnPage();


  function f_location_update_delete() {
    $('.recordData').on('click', function() {
      var send_id = $(this).find('.sendLink').text();
      location.href = '/inventory_control/update_delete?send_id=' + send_id;
    });
  }


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


  function f_registerBtn() {
    $('.registerBtn').on('click', function() {
      window.confirm("入力したユーザー情報で、すぐにWebサービスサイトへログインします。\n登録しますか？");
    });
  }


  function f_returnPage() {
    var issetCount = $('#userInfoCount').text();
    var reqPage = $('.reqPage').text();

    if (reqPage == 2 && issetCount <= 20) {
      if(!alert('検索データが２１以上見つからないため、このページを表示できません。\n前のページに戻ります。')) {
        history.back();
      }
    }

    if (reqPage == 3 && issetCount <= 40) {
      if(!alert('検索データが４１以上見つからないため、このページを表示できません。\n前のページに戻ります。')) {
        history.back();
      }
    }

    if (reqPage == 4 && issetCount <= 60) {
      if(!alert('検索データが６１以上見つからないため、このページを表示できません。\n前のページに戻ります。')) {
        history.back();
      }
    }

    if (reqPage == 5 && issetCount <= 80) {
      if(!alert('検索データが８１以上見つからないため、このページを表示できません。\n前のページに戻ります。')) {
        history.back();
      }
    }

    if (reqPage >= 6) {
      if(!alert('このページは表示できません。\n前のページに戻ります。')) {
        history.back();
      }
    }

  }


});
