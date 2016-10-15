<?php

class DocumentTypeTest extends PHPUnit_Framework_TestCase {

  /**
   * @covers \bblincoe\cercare\DocumentType::__construct
   * @expectedException \bblincoe\cercare\exceptions\InvalidArgumentException
   */
  public function testExceptionIsRaisedForInvalidConstructorArgument() {
    new bblincoe\cercare\DocumentType(null);
  }

}

?>
