B_HTML
INCLUDE_PHP_LIB(<*$ADMIN_DIR/users*>)
B_DATABASE

CHECK_BASIC_ACCESS
CHECK_ACCESS(<*DeleteUsers*>)

B_HEAD
	X_EXPIRES
	X_TITLE(<*Delete user account*>)
<?php  if ($access == 0) { ?>dnl
		X_AD(<*You do not have the right to delete user accounts.*>)
<?php  } ?>dnl
E_HEAD

<?php  if ($access) { ?>dnl
B_STYLE
E_STYLE

B_BODY

B_HEADER(<*Delete user account*>)
B_HEADER_BUTTONS
X_HBUTTON(<*Users*>, <*users/*>)
E_HEADER_BUTTONS
E_HEADER

<?php 
    todefnum('User');
    query ("SELECT * FROM Users WHERE Id=$User", 'u');
    if ($NUM_ROWS) { 
	fetchRow($u);
    ?>dnl
<P>
B_MSGBOX(<*Delete user account*>)
	X_MSGBOX_TEXT(<*<LI><?php  putGS('Are you sure you want to delete the user account $1 ?','<B>'.getHVar($u,'UName'),'</B>'); ?></LI>*>)
	B_MSGBOX_BUTTONS
		<FORM METHOD="POST" ACTION="do_del.php">
		<INPUT TYPE="HIDDEN" NAME="User" VALUE="<?php  pencHTML($User); ?>">
		SUBMIT(<*Yes*>, <*Yes*>)
		REDIRECT(<*No*>, <*No*>, <*X_ROOT/users/*>)
		</FORM>
	E_MSGBOX_BUTTONS
E_MSGBOX
<P>
<?php  } else { ?>dnl
<BLOCKQUOTE>
	<LI><?php  putGS('No such user account.'); ?></LI>
</BLOCKQUOTE>
<?php  } ?>dnl

X_HR
X_COPYRIGHT
E_BODY
<?php  } ?>dnl

E_DATABASE
E_HTML
