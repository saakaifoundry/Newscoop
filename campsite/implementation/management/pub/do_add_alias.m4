INCLUDE_PHP_LIB(<*$ADMIN_DIR/pub*>)
B_DATABASE

CHECK_BASIC_ACCESS
CHECK_ACCESS(<*ManagePub*>)

B_HEAD
	X_TITLE(<*Adding new alias*>)
<?php  if ($access == 0) { ?>dnl
	X_AD(<*You do not have the right to manage publications.*>)
<?php  } ?>dnl
E_HEAD

<?php  if ($access) { ?>dnl
B_STYLE
E_STYLE

B_BODY

<?php 
	todefnum('cPub');
	todefnum('cName');
	$correct = 1;
	$created = 0;
?>

B_HEADER(<*Adding new alias*>)
B_HEADER_BUTTONS
X_HBUTTON(<*Publications*>, <*pub/*>)
E_HEADER_BUTTONS
E_HEADER

<?php 
	query ("SELECT Name FROM Publications WHERE Id=$cPub", 'q_pub');
	if ($NUM_ROWS) {
		fetchRow($q_pub);
?>dnl
B_CURRENT
X_CURRENT(<*Publication*>, <*<?php  pgetHVar($q_pub,'Name'); ?>*>)
E_CURRENT

<TABLE>
<TR>
	<TD>X_BACK_BUTTON(<*Back to publication*>, <*edit.php?Pub=<?php  pencURL($cPub); ?>*>)</TD>
	<TD>X_BACK_BUTTON(<*Back to aliases*>, <*aliases.php?Pub=<?php  pencURL($cPub); ?>*>)</TD>
</TR>
</TABLE>

<P>
B_MSGBOX(<*Adding new alias*>)
	X_MSGBOX_TEXT(<*
<?php 
	$cName = trim($cName);
	if ($cName == "" || $cName == " ") {
		$correct= 0;
?>dnl
		<LI><?php  putGS('You must complete the $1 field.', '<B>Name</B>'); ?></LI>
<?php 
	}

	$aliases = 0;
	if ($correct) {
		$sql = "SELECT COUNT(*) AS alias_count FROM Aliases WHERE Name = '" . $cName . "'";
		query($sql, 'q_count');
		fetchRow($q_count);
		$aliases = getHVar($q_count, 'alias_count');
		if ($aliases == 0) {
			query ("INSERT INTO Aliases SET Name = '$cName', IdPublication = '$cPub'");
			$created = ($AFFECTED_ROWS > 0);
		}
	}

	if ($created) {
		$params = array($operation_attr=>$operation_modify, "IdPublication"=>"$cPub" );
		$msg = build_reset_cache_msg($cache_type_publications, $params);
		send_message("127.0.0.1", server_port(), $msg, $err_msg);
?>dnl
		<LI><?php  putGS('The site alias $1 has been added to publication $2.', '<B>'.$cName.'</B>', '<B>'.getHVar($q_pub,'Name').'</B>'); ?></LI>
		X_AUDIT(<*151*>, <*getGS('The site alias $1 has been added to publication $2.',$cName,getVar($q_pub,'Name'))*>)
<?php
	} else {
		if ($correct != 0) {
			if ($aliases > 0) {
				echo "<LI>"; putGS('Another alias with the same name exists already.'); echo "</LI>\n";
			}
			echo "<LI>";
			putGS('The site alias $1 could not be added.', '<B>'.$cName.'</B>');
			echo "</LI>\n";
		}
	}
?>dnl
	*>)
<?php  if ($correct && $created) { ?>dnl
	B_MSGBOX_BUTTONS
		REDIRECT(<*new*>, <*Add another*>, <*X_ROOT/pub/add_alias.php?Pub=<?php  pencURL($cPub); ?>*>)
		REDIRECT(<*Done*>, <*Done*>, <*X_ROOT/pub/aliases.php?Pub=<?php  pencURL($cPub); ?>*>)
	E_MSGBOX_BUTTONS
<?php  } else { ?>
	B_MSGBOX_BUTTONS
		REDIRECT(<*OK*>, <*OK*>, <*X_ROOT/pub/aliases.php?Pub=<?php  pencURL($cPub); ?>*>)
	E_MSGBOX_BUTTONS
<?php  } ?>dnl
E_MSGBOX
<P>
<?php  } else { ?>dnl
<BLOCKQUOTE>
        <LI><?php  putGS('Publication does not exist.'); ?></LI>
</BLOCKQUOTE>
<?php  } ?>dnl

X_COPYRIGHT
E_BODY
<?php  } ?>dnl

E_DATABASE
E_HTML
