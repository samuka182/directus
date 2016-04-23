<?php
use Ruckusing\Migration\Base as Ruckusing_Migration_Base;

class UpdateDirectusMessagesDateTimeColumn extends Ruckusing_Migration_Base
{
    public function up()
    {
        $this->change_column('directus_messages', 'datetime', 'TIMESTAMP', array(
            'null' => false,
            'default' => 'CURRENT_TIMESTAMP'
        ));
    }//up()

    public function down()
    {
        $this->change_column('directus_messages', 'datetime', 'datetime', array(
            'null' => false,
            'default' => '0000-00-00 00:00:00'
        ));
    }//down()
}
