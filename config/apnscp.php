<?php
Configure::set('Apnscp.email_templates', [
    'en_us' => [
        'lang' => 'en_us',
        'text' => 'Your hosting account details are below!

Domain: {service.apnscp_domain}
Username: {service.apnscp_username}
Password: {service.apnscp_password}

To log into your control panel please visit https://{module.host_name}:2083.
Please update your name servers as soon as possible to the following:

{% for name_server in module.name_servers %}
Name server: {name_server}{% endfor %}

Thank you for your business!',
        'html' => '<p>Your hosting account details are below!</p>
<p>Domain: {service.apnscp_domain}<br />Username: {service.apnscp_username}<br />Password: {service.apnscp_password}</p>
<p>To log into your control panel please visit https://{module.host_name}:2083.<br />Please update your name servers as soon as possible to the following:</p>
<p>{% for name_server in module.name_servers %}<br />Name server: {name_server}{% endfor %}</p>
<p>Thank you for your business!</p>'
    ]
]);
