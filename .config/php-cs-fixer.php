<?php

// A few folders shouldn't be processed for optimization purpose
// For instance, don't process the bootstrap folder (used in Laravel)
$finder = PhpCsFixer\Finder::create()
    ->exclude(['.config', 'bootstrap']);

// Lot of options are explained here :
// https://mlocati.github.io/php-cs-fixer-configurator
// @link: https://github.com/FriendsOfPHP/PHP-CS-Fixer
return PhpCsFixer\Config::create()
    //->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        // Each line of multi-line DocComments must have an asterisk [PSR-5] and must be aligned with the first one.
        'align_multiline_comment' => true,
        // Each element of an array must be indented exactly once
        'array_indentation' => true,
        // Use [] for arrays
        'array_syntax' => ['syntax' => 'short'],
        // Binary operators should be surrounded by space as configured .
        // Add a space in f.i. "if ($a===8)" so replace by "if ($a === 8)"
        'binary_operator_spaces' => [
            'align_double_arrow' => true,
            'align_equals'       => true,
        ],
        // There MUST be one blank line after the namespace declaration.
        'blank_line_after_namespace' => true,
        // Ensure there is no code on the same line as the PHP open tag and it is followed by a blank line.
        'blank_line_after_opening_tag' => true,
        // An empty line feed must precede any configured statement.
        'blank_line_before_statement' => true,
        // Write the "{" "}" of a method on his own line
        //      public function getDebugMode() : bool { return false; }
        // will become
        //      public function getDebugMode() : bool
        //      {
        //          return false;
        //      }
        'braces' => [
            'allow_single_line_closure'                   => true,
            'position_after_anonymous_constructs'         => 'same',
            'position_after_functions_and_oop_constructs' => 'next',
            'position_after_control_structures'           => 'same',
        ],
        // Class's definitions should be single line;
        'class_definition' => ['singleLine' => true],
        // Converts ::class keywords to FQCN (Full Qualified Class Name) strings.
        // Convert use Foo\Bar\Baz; $className = Baz::class;
        // to $className = 'Foo\Bar\Baz';
        'class_keyword_remove' => false,
        // Concatenation should be spaced according configuration.
        // Transform 'A'.'B'.'C' to 'A' . 'B' . 'C'
        'concat_space' => ['spacing' => 'one'],
        // Calling unset on multiple items should be done in one call.
        'combine_consecutive_unsets' => true,
        // Transform 'declare(ticks=1);' to 'declare(ticks = 1);'
        'declare_equal_normalize' => ['space' => 'single'],
        // Replace 'else if' by 'elseif' so all control keywords look like single words.
        'elseif' => true,
        // PHP code MUST use only UTF-8 without BOM (remove BOM).
        'encoding' => true,
        // Add missing space between function's argument and its typehint.
        'function_typehint_space' => true,
        // PHP code must use the long <?php tags
        'full_opening_tag' => true,
        // Don't use # for comments but //
        'hash_to_slash_comment' => true,
        // Add a header in each PHP file, get the header from the $header
        // variable defined here above.
        // The location of the header should be after the declare_strict directive
        'header_comment' => [],
        // Include/Require and file path should be divided with a single space.
        // File path should not be placed under brackets
        'include' => true,
        // Code MUST use configured indentation type.
        'indentation_type' => true,
        // All PHP files must use same line ending.
        'line_ending' => true,
        // Cast should be written in lower case.
        'lowercase_cast' => true,
        // The PHP constants true, false, and null MUST be in lower case. (TRUE should become true)
        'lowercase_constants' => true,
        // PHP keywords MUST be in lower case (TRY CatCH should become try catch)
        'lowercase_keywords' => true,
        // Class static references self, static and parent MUST be in lower case.
        'lowercase_static_reference' => true,
        // Use __DIR__ and __FILE__ not __dir__ or __file__
        'magic_constant_casing' => true,
        // Method chaining MUST be properly indented.
        'method_chaining_indentation'=> true,
        // DocBlocks must start with two asterisks, multiline comments must start with a
        // single asterisk, after the opening slash. Both must end with a single asterisk
        // before the closing slash.
        'multiline_comment_opening_closing' => true,
        // Don't allow STRLEN() typo; use strlen()
        'native_function_casing' => true,
        // Force the braces after new; f.i. replace "$x = new X" by "$x = new X()"
        'new_with_braces' => true,
        // Remove the final end php tag at the bottom of the file
        'no_closing_tag' => true,
        // Remove empty comments
        'no_empty_comment' => true,
        'no_empty_phpdoc'  => true,
        // Keep only one ";" so replace "$a = 1;;;" by "$a = 1;"
        'no_empty_statement' => true,
        // Removes extra blank lines and/or blank lines following configuration.
        'no_extra_blank_lines' => [
            'break',
            'continue',
            'extra',
            'return',
            'throw',
            'use',
            'parenthesis_brace_block',
            'square_brace_block',
            'curly_brace_block',
        ],
        // No whitespace before the "namespace" word
        'no_leading_namespace_whitespace' => true,
        // Use echo and not print
        'no_mixed_echo_print'                         => ['use' => 'echo'],
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_multiline_whitespace_before_semicolons'   => true,
        // Replace short-echo <?= with long format <?php echo syntax.
        'no_short_echo_tag' => true,
        // Short cast bool using double exclamation mark should not be used.
        'no_short_bool_cast'                         => true,
        'no_spaces_around_offset'                    => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_trailing_comma_in_list_call'             => true,
        'no_trailing_comma_in_singleline_array'      => true,
        // Remove unneeded whitespace at the end of the sentence
        'no_trailing_whitespace'            => true,
        'no_trailing_whitespace_in_comment' => true,
        // Remove unneeded parentheses like in "echo ('Test')" and replace by "echo 'Test'"
        'no_unneeded_control_parentheses' => true,
        // There should not be an empty return statement at the end of a function.
        'no_useless_return'                   => true,
        'no_whitespace_before_comma_in_array' => true,
        'no_whitespace_in_blank_line'         => true,
        // Array index should always be written by using square braces.
        'normalize_index_brace' => true,
        // Rewrite "$a   -> display()" to "$a->display()"
        'object_operator_without_whitespace' => true,
        // Reorder elements in the source file based on the following order
        'ordered_class_elements' => [
            'use_trait',
            'public',
            'protected',
            'private',
            'constant',
            'constant_public',
            'constant_protected',
            'constant_private',
            'property',
            'property_static',
            'property_public',
            'property_protected',
            'property_private',
            'property_public_static',
            'property_protected_static',
            'property_private_static',
            'construct',
            'destruct',
            'magic',
            'method',
            'method_static',
            'method_public',
            'method_protected',
            'method_private',
            'method_public_static',
            'method_protected_static',
            'method_private_static',
            'phpunit',
        ],
        // Ordering use statements
        'ordered_imports' => true,
        // PHPDoc should contain @param for all params.
        'phpdoc_add_missing_param_annotation' => true,
        // All items of the given phpdoc tags must be either left-aligned or (by default) aligned vertically.
        'phpdoc_align' => true,
        // Docblocks should have the same indentation as the documented subject.
        'phpdoc_indent' => true,
        // Clean alias, replace '@link xxxx' by '@see xxxx'
        'phpdoc_no_alias_tag' => true,
        // Keep @return void or @return null in phpdoc
        'phpdoc_no_empty_return' => false,
        // Remove @inheritdoc tag
        'phpdoc_no_useless_inheritdoc' => true,
        // Reorder tags @param then @throws then @return
        'phpdoc_order'                 => true,
        'phpdoc_return_self_reference' => true,
        // Scalar types should always be written in the same form.
        // int not integer, bool not boolean, float not real or double.
        'phpdoc_scalar' => true,
        // Add a blank line between blocks (between description, @param, @throws, ...)
        'phpdoc_separation'              => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_summary'                 => true,
        // Replace /** ... */ (i.e. a single line comment) to  /* ... */
        'phpdoc_to_comment' => true,
        // Remove unneeded empty lines in phpdoc
        'phpdoc_trim' => true,
        // Use the correct case for types i.e. don't use STRING but string
        'phpdoc_types' => true,
        // There should be one or no space before colon, and one space after it
        // in return type declarations, according to configuration.
        'return_type_declaration' => true,
        // Instructions must be terminated with a semicolon.
        'semicolon_after_instruction' => true,
        // Cast (boolean) and (integer) should be written as (bool) and (int),
        // (double) and (real) as (float).
        'short_scalar_cast' => true,
        // A PHP file without end tag must always end with a single empty line feed.
        'single_blank_line_at_eof' => true,
        // There should be exactly one blank line before a namespace declaration.
        'single_blank_line_before_namespace' => true,
        // There MUST NOT be more than one property or constant declared per statement.
        // Convert "const FOO_1=1,FOO_2=2;" to two lines, "const FOO_1=1;" and the same for FOO_2
        'single_class_element_per_statement' => true,
        // There MUST be one use keyword per declaration.
        // Don't allow "use Foo, Sample, Sample\Sample as Sample" but write this in three lines
        'single_import_per_statement' => true,
        // Add an empty line after the "use" statements
        'single_line_after_imports' => true,
        // Single-line comments and multi-line comments with only one line of actual content
        // should use the // syntax.
        'single_line_comment_style' => true,
        // Use single quote instead of double where possible
        // Convert echo "Test" to echo 'Test'
        'single_quote' => true,
        // Increment and decrement operators should be used if possible.
        'standardize_increment' => true,
        // Replace all <> with !=.
        'standardize_not_equals' => true,
        // A case should be followed by a colon and not a semicolon.
        // "switch ... case 1;" should be replaced by "switch ... case 1:"
        'switch_case_semicolon_to_colon' => true,
        // Remove unneeded space between the value and the colon
        // "switch ... case 1   :" will become "switch ... case 1:"
        'switch_case_space' => true,
        // Replace "$a = $a   ?1 :0" by "$a = $a ? 1 :0"
        'ternary_operator_spaces' => true,
        // PHP multi-line arrays should have a trailing comma.
        'trailing_comma_in_multiline_array' => true,
        // Replace "$sample = array(   'a', 'b'   );" by "$sample = array('a', 'b');"
        'trim_array_spaces' => true,
        // Replace "$sample ++;" by "$sample++;"
        'unary_operator_spaces' => true,
        // Visibility MUST be declared on all properties and methods; a
        // bstract and final MUST be declared before the visibility;
        // static MUST be declared after the visibility.
        'visibility_required' => true,
        // Replace "[1,'a',$b];" to "[1, 'a', $b];"
        'whitespace_after_comma_in_array' => true,
        // In a if statement, first write the constant
        // Rewrite "if ($a === null) {" to "if (null === $a) {"
        'yoda_style' => true,
    ])
    ->setIndent('    ')
    ->setLineEnding("\n")
    ->setFinder($finder);
