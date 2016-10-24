/**
 * Created by owner on 2016-06-04.
 */


var defaultId=null;
function delete_shadow(field){
    field.placeholder='';
}

function show_shadow(field) {
    if(field.value ==''){
        if(field.id=='i_id')
            field.placeholder="4글자 이상 입력하세요.";
        else if(field.id=='i_pass' || field.id=='i_pass_chk')
            field.placeholder="********";
    }
}

function idDuplicate_check() {
    defaultId=document.getElementById('i_id').value;

    if(defaultId=='')
        alert("아이디를 입력하세요.");
    else if (defaultId.length < 4)
        alert("4글자 이상 입력하세요.");
    else{
        var form=document.getElementsByName('joinForm')[0];
        window.open("","idDuplicateCheck",("width=250,height=100"));
        form.setAttribute("method","post");
        form.setAttribute("action","idDuplicateCheck.php");
        form.setAttribute("target","idDuplicateCheck");
        form.setAttribute("i_id",defaultId);
        form.submit();
    }
}

function get_select_data(selectedIndex) {
    var adr_arr=["naver.com","daum.net","nate.com","gmail.com","hotmail.com","yahoo.com"];
    if(selectedIndex==0)
        document.getElementsByName("i_email_2")[0].value='';
    else
        document.getElementsByName("i_email_2")[0].value=adr_arr[selectedIndex-1];
}

function joinFormCheck(){
    if(document.joinForm.i_id.value=='')
        alert("아이디를 입력해주시기 바랍니다.");
    else if(document.joinForm.i_pass.value=='')
        alert("비밀번호를 입력해주시기 바랍니다.");
    else if(document.joinForm.i_name.value=='')
        alert("이름을 입력해주시기 바랍니다.");
    else if(document.joinForm.i_email_1.value=='' || document.joinForm.i_email_2.value=='')
        alert("이메일를 제대로 입력해주시기 바랍니다.");
    else if(document.joinForm.i_pass.value != document.joinForm.i_pass_chk.value)
        alert("비밀번호가 일치하지 않습니다.");

}
