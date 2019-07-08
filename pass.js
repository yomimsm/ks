

/*
To add/change users & Passwords just change the users array 
and passwords were it tells you.

You can have as many/little as you like 
When you add a new user be sure to add a Pass word
so a new user would look like
" users[7] = 'username'; pass[7] = 'password' "
(without "s)

REMEMBER: Usernames & Passwords are case sensative so 'pass'
is differnt to 'Pass' & 'PaSs'
*/

// -------- Set Vars -----------
var users = new Array()
var pass = new Array()
	users[0] = 'webmaster'; pass[0] = '1web-master'	//Leave this Username for Webmaster (you) but change password
//Add/change user names here & Add/chage passwords here
	users[1] = 'Matehuala'; pass[1] = 'mate-001'	//User1 name & password
	users[2] = 'Mazatlan'; pass[2] = 'maza-001'	//User2
//	users[3] = 'Matehuala'; pass[3] = 'mate-001'	//User3
//	users[4] = 'Mazatlan'; pass[4] = 'maza-001'	//ect
//	users[5] = 'User5'; pass[5] = 'Pass5'
//	users[6] = 'User6'; pass[6] = 'Pass6'
var wrighturl = 'decbom.html'	//Page you want the user to go to if Password is wright
var wrongurl = 'noauto.html'	//  "   "   "    "   "   "  "  "  "    "   "  "  wrong

//-----------------------------------------
//----------- Leave this alone ------------
function isPass(){
	var dn = document.nameenter
	userN = dn.usern.value
	passV = dn.pass.value
	if (userN.length < 1){ alert('Introducir El Usuario'); return false }
	if (passV.length < 1){ alert('Introducir El Password'); return false }
	for (var i = 0; i < users.length ; i++){
	if (users[i] == userN && pass[i] == passV){ location.href = wrighturl; return false}
	if (users[i] == userN && pass[i] != passV){ location.href = wrongurl; return false}
	}
	location.href = wrongurl
}
function list(){
	userO=window.open('about:blank','winID','height=400,width=200,top=100,left=100,location=no,menubar=no,resizable=yes,scrollbars=yes,status=no,toolbar=no')
	userO.document.write('<u><big> List Of Users </big></u><br> \n')
	for (var u = 0; u < users.length; u++){
		userO.document.write(' &raquo; ' + users[u] + "<br> \n")
	}
	userO.document.write('<a href="javascript:window.close()"> Close </a>')
}
//------------------------------------------
//------------------------------------------
//       DISCLAIMER
// USE SCRIPT AT OWN RISK
