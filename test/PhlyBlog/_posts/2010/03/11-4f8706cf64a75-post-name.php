<?php
use PhlyBlog\AuthorEntity;
use PhlyBlog\EntryEntity;

$entry  = new EntryEntity();
$author = new AuthorEntity();
$author->fromArray(array (
  'id' => 'jdoe',
  'name' => 'John Doe',
  'email' => 'john@doe.com',
  'url' => 'http://john.doe.com',
));

$entry->setId('4f8706cf64a75-post-name');
$entry->setTitle('4f8706cf64a75 Post');
$entry->setAuthor($author);
$entry->setDraft(false);
$entry->setPublic(true);
$entry->setCreated(new DateTime('2010:03:11 10:58:58'));
$entry->setUpdated(new DateTime('2010:03:11 10:58:58'));
$entry->setTimezone('America/Chicago');
$entry->setTags(array (
  0 => 'php',
));

$body =<<<'EOT'
This is it!
EOT;
$entry->setBody($body);

$extended =<<<'EOT'
This is the extended portion of the entry.
EOT;
$entry->setExtended($extended);

return $entry;
