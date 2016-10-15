<?php
/**
 * This file is part of the Cercare package.
 *
 * (c) Brandon Blincoe <bblincoe@gmail.com>
 *
 * For the full copyright and license information, please view the license file
 * that was distributed with this source code.
 */
 
use bblincoe\cercare\DocumentType;

class DocumentTypeTest extends PHPUnit_Framework_TestCase {

  /**
   * @covers \bblincoe\cercare\DocumentType::__construct
   * @expectedException \bblincoe\cercare\exceptions\InvalidArgumentException
   */
  public function testExceptionIsRaisedForInvalidConstructorArgument() {
    new DocumentType(null);
  }

}

?>
