<?php
/**
 * This file is part of the Cercare package.
 *
 * (c) Brandon Blincoe <bblincoe@gmail.com>
 *
 * For the full copyright and license information, please view the license file
 * that was distributed with this source code.
 */

namespace bblincoe\cercare;

use bblincoe\cercare\exceptions\InvalidArgumentException;

/**
 * Value Object that represents document type.
 */
class DocumentType {

  private $documentType;

  /**
   * @param string $documentType
   * @throws \bblincoe\cercare\InvalidArgumentException
   */
  public function __construct($documentType) {
    if (!isset($documentType)) {
      throw new InvalidArgumentException(
        sprintf('Unknown document type "%s"', $documentType)
      );
    }
  }

}

?>
