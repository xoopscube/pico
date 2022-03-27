<?php

const _MD_PICO_FORMMAIL_MSG_ERRORANONYMOUS = 'Error(s) in form';
const _MD_PICO_FORMMAIL_MSG_SENTSUCCESSFULLY = 'sent successfully';

const _MD_PICO_FORMMAIL_MAILSUBJECT = 'An inquiry about %s';
const _MD_PICO_FORMMAIL_CCMAILSUBJECT = '(confirm) An inquiry about %s';
const _MD_PICO_FORMMAIL_MAILFLDSEP = "\n---------------------------------------------------------------\n";
const _MD_PICO_FORMMAIL_MAILMIDSEP = "\n--------\n";

const _MD_PICO_FORMMAIL_BLOCK_POSTCONFIRM = '<div class="confirmMsg">Are you OK?<br><input type="submit" value="Go!" /> <input type="submit" name="cancel" value="Cancel" /></div>';
const _MD_PICO_FORMMAIL_BLOCK_ERROR_BEGIN = '<div class="errorMsg"><ul>You input incompletely';
const _MD_PICO_FORMMAIL_BLOCK_ERROR_END = '</ul></div>';

const _MD_PICO_FORMMAIL_ERRFMT_MISSING_REQUIRED = '<li>Missing %s is required</li>';
const _MD_PICO_FORMMAIL_ERRFMT_INVALID_EMAIL = '<li>Invalid email address : `%s`</li>';
const _MD_PICO_FORMMAIL_ERRFMT_INVALID_NUMBER = '<li>Input only number in %s</li>';
const _MD_PICO_FORMMAIL_ERRFMT_INVALID_GENERAL = '<li>Invalid format : `%s`</li>';
const _MD_PICO_FORMMAIL_ERRFMT_MISSING_SELECTED = '<li>Select one for %s</li>';
const _MD_PICO_FORMMAIL_ERRFMT_INVALID_OPTION = '<li>Invalid option is found in %s</li>';
const _MD_PICO_FORMMAIL_ERRFMT_ATLEAST_ONE = '<li>Select at least one for %s</li>';
