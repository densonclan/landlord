<?php
//ADDS CONFIGURE TO ALL VIEWS
class_alias('Cake\Core\Configure', 'Configure');

//CUSTOM VALUES
Configure::write('FRONT_URL', 'http://localhost/landlord');
Configure::write('ADMIN_URL', 'http://localhost/landlord/admin');
Configure::write('APP_NAME', 'Landlord');


date_default_timezone_set('Europe/London');
setlocale(LC_ALL, array('en_GB.UTF8','en_GB@euro','en_GB','english'));

