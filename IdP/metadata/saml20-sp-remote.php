<?php
/**
 * SAML 2.0 remote SP metadata for simpleSAMLphp.
 *
 * See: http://simplesamlphp.org/docs/trunk/simplesamlphp-reference-sp-remote
 */

$metadata['http://supportpal.app/frontend/saml/metadata'] = array(
	'AssertionConsumerService' => 'http://supportpal.app/frontend/saml/acs',
	'SingleLogoutService' => 'http://supportpal.app/frontend/saml/sls',
);

$metadata['http://supportpal.app/index.php/frontend/saml/metadata'] = array(
	'AssertionConsumerService' => 'http://supportpal.app/index.php/frontend/saml/acs',
	'SingleLogoutService' => 'http://supportpal.app/index.php/frontend/saml/sls',
);

$metadata['http://localhost:8888/arcticdesk/frontend/saml/metadata'] = array(
	'AssertionConsumerService' => 'http://localhost:8888/arcticdesk/frontend/saml/acs',
	'SingleLogoutService' => 'http://localhost:8888/arcticdesk/frontend/saml/sls',
);

$metadata['http://localhost:8888/arcticdesk/operator/saml/metadata'] = array(
	'AssertionConsumerService' => 'http://localhost:8888/arcticdesk/operator/saml/acs',
	'SingleLogoutService' => 'http://localhost:8888/arcticdesk/operator/saml/sls',
);
