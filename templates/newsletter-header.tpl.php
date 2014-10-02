<?php
/**
 * @file
 * Newsletter header.
 */
  $image_path = url(drupal_get_path('theme', $GLOBALS['theme']), array('absolute' => TRUE, 'language' => FALSE));
?>
<table style="border-collapse: collapse; background-color: #a39e8f;" width="600" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td colspan="3" style="border-collapse: collapse;" height="15">
        <p style="font-size: 15px; line-height: 15px; font-family: Helvetica, Arial, sans-serif; color: #231717; margin: 0; padding: 0">&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td style="border-collapse: collapse;" valign="middle" width="630" align="left">
        <img src="<?php echo $image_path; ?>/images/emailkanon/logo.png" alt="<?php echo variable_get('site_name', ''); ?>">
      </td>
    </tr>
    <tr>
      <td style="border-collapse: collapse;" width="15"><br /></td>
      <td style="border-collapse: collapse;" align="right">
        <p style="font-size: 13px; line-height: 15px; font-family: Helvetica, Arial, sans-serif; margin: 0; color: #ffffff; padding: 0">
          {{#unsubscribe_link}}<?php echo t('Unsubscribe'); ?>{{/unsubscribe_link}}
        </p>
      </td>
      <td style="border-collapse: collapse;" width="15"><br /></td>
    </tr>
    <tr>
      <td colspan="3" style="border-collapse: collapse;" height="15">
        <p style="font-size: 15px; line-height: 15px; font-family: Helvetica, Arial, sans-serif; color: #231717; margin: 0; padding: 0">&nbsp;</p>
      </td>
    </tr>
  </tbody>
</table>
