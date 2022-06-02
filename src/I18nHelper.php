<?php

declare(strict_types=1);

// global code
//phpcs:ignore SlevomatCodingStandard.Namespaces.NamespaceDeclaration.DisallowedBracketedSyntax, SlevomatCodingStandard.Namespaces.NamespaceSpacing.IncorrectLinesCountBeforeNamespace
namespace {
    if (!\function_exists('__')) {
        /**
         * Wrapper for "gettext / dgetttext".
         */
        function __(string $msg, ?string $domain = null): string
        {
            if ($domain !== null) {
                return \dgettext($domain, $msg);
            }
            return \gettext($msg);
        }
    }

    if (!\function_exists('___')) {
        /**
         * Wrapper for "ngettext / dngettext".
         */
        function ___(string $msgSingular, string $msgPlural, int $msgNumber, ?string $domain = null): string
        {
            if ($domain !== null) {
                return \dngettext($domain, $msgSingular, $msgPlural, $msgNumber);
            }
            return \ngettext($msgSingular, $msgPlural, $msgNumber);
        }
    }
}
