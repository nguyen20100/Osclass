<?php

    /*
     *      OSCLass – software for creating and publishing online classified
     *                           advertising platforms
     *
     *                        Copyright (C) 2010 OSCLASS
     *
     *       This program is free software: you can redistribute it and/or
     *     modify it under the terms of the GNU Affero General Public License
     *     as published by the Free Software Foundation, either version 3 of
     *            the License, or (at your option) any later version.
     *
     *     This program is distributed in the hope that it will be useful, but
     *         WITHOUT ANY WARRANTY; without even the implied warranty of
     *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *             GNU Affero General Public License for more details.
     *
     *      You should have received a copy of the GNU Affero General Public
     * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */

?>

<?php
    //$aItems = $this->_get('aItems') ;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
    <head>
        <?php $this->osc_print_head() ; ?>
    </head>
    <body>

        <div class="container">

            <?php $this->osc_print_header() ; ?>

            <div class="content user_account">

                <h1><strong><?php _e('User account manager') ; ?></strong></h1>

                <div id="sidebar">

                    <?php echo osc_private_user_menu() ; ?>

                </div>

                <div id="main">

                    <h2><?php echo __('Items from ') . osc_logged_user_name() ; ?></h2>

                    <?php if(count_items()==0) { ?>
                        <h3><?php _e('There aren\'t items added yet') ; ?></h3>
                    <?php } else { ?>
                        <?php while(has_items()) { ?>
                            <div class="userItem" >
                                <div><a href="<?php echo osc_item_url() ; ?>"><?php echo osc_item_title() ; ?></a></div>

                                <div class="userItemData" >
                                <?php _e('Publication date') ; ?>: <?php echo osc_format_date(osc_item()) ; ?><br />
                                <?php _e('Price') ; ?>: <?php echo osc_format_price() ; ?>
                                </div>

                            </div>
                            <br />
                        <?php } ?>
                    <?php } ?>

                </div>

                <?php $this->osc_print_footer() ; ?>

        </div>

        <?php osc_show_flash_message() ; ?>

    </body>

</html>