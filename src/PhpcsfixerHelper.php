<?php

namespace Shawnveltman\PhpcsfixerHelper;

class PhpcsfixerHelper
{
    public function get_style_rules()
    {
        return [
            'combine_consecutive_issets'                       => true,
            'combine_consecutive_unsets'                       => true,
            'explicit_indirect_variable'                       => true,
            'array_syntax'                                     => ['syntax' => 'short'],
            'binary_operator_spaces'                           => ['default' => 'align_single_space'],
            'simple_to_complex_string_variable'                => true,
            'single_space_after_construct'                     => true,
            'blank_line_after_namespace'                       => true,
            'clean_namespace'                                  => true,
            'blank_line_after_opening_tag'                     => true,
            'blank_line_before_statement'                      => [
                'statements' => [
                    'break',
                    'case',
                    'continue',
                    'do',
                    'for',
                    'foreach',
                    'if',
                    'return',
                    'switch',
                    'throw',
                    'try',
                    'while',
                    'yield',
                    'yield_from',
                ],
            ],
            'braces'                                           => [
                'position_after_functions_and_oop_constructs' => 'next',
                'position_after_control_structures'           => 'next',
                'position_after_anonymous_constructs'         => 'next',
            ],
            'cast_spaces'                                      => true,
            'modernize_types_casting'                          => true,
            'class_definition'                                 => true,
            'class_attributes_separation'                      => [
                'elements' => [
                    'const' => 'only_if_meta', 'method' => 'one', 'property' => 'only_if_meta', 'trait_import' => 'none',
                ],
            ],
            'concat_space'                                     => [
                'spacing' => 'one',
            ],
            'declare_equal_normalize'                          => true,
            'elseif'                                           => true,
            'no_superfluous_elseif'                            => true,
            'encoding'                                         => true,
            'full_opening_tag'                                 => true,
            'fully_qualified_strict_types'                     => true, // added by Shift
            'global_namespace_import'                          => ['import_classes' => true, 'import_constants' => true, 'import_functions' => true],
            'function_declaration'                             => true,
            'function_typehint_space'                          => true,
            'function_to_constant'                             => true,
            'heredoc_to_nowdoc'                                => true,
            'include'                                          => true,
            'increment_style'                                  => ['style' => 'post'],
            'logical_operators'                                => true,
            'new_with_braces'                                  => true,
            'indentation_type'                                 => true,
            'linebreak_after_opening_tag'                      => true,
            'operator_linebreak'                               => true,
            'line_ending'                                      => true,
            'lowercase_cast'                                   => true,
            'constant_case'                                    => ['case' => 'lower'],
            'lowercase_keywords'                               => true,
            'lowercase_static_reference'                       => true, // added from Symfony
            'magic_method_casing'                              => true, // added from Symfony
            'magic_constant_casing'                            => true,
            'method_argument_space'                            => true,
            'native_function_casing'                           => true,
            'native_function_type_declaration_casing'          => true,
            'no_alias_functions'                               => true,
            'no_extra_blank_lines'                             => [
                'tokens' =>
                    [
                        'break',
                        'case',
                        'continue',
                        'curly_brace_block',
                        'default',
                        'extra',
                        'parenthesis_brace_block',
                        'return',
                        'square_brace_block',
                        'switch',
                        'throw',
                        'use',
                        'use_trait',
                    ],
            ],
            'no_blank_lines_after_class_opening'               => true,
            'no_blank_lines_after_phpdoc'                      => true,
            'no_null_property_initialization'                  => true,
            'no_closing_tag'                                   => true,
            'no_empty_phpdoc'                                  => true,
            'no_break_comment'                                 => true,
            'no_empty_statement'                               => true,
            'no_empty_comment'                                 => true,
            'no_leading_import_slash'                          => true,
            'no_leading_namespace_whitespace'                  => true,
            'no_mixed_echo_print'                              => [
                'use' => 'echo',
            ],
            'no_multiline_whitespace_around_double_arrow'      => true,
            'multiline_whitespace_before_semicolons'           => [
                'strategy' => 'no_multi_line',
            ],
            'compact_nullable_typehint'                        => true,
            'no_short_bool_cast'                               => true,
            'no_singleline_whitespace_before_semicolons'       => true,
            'semicolon_after_instruction'                      => true,
            'no_spaces_after_function_name'                    => true,
            'no_spaces_around_offset'                          => true,
            'no_spaces_inside_parenthesis'                     => true,
            'no_space_around_double_colon'                     => true,
            'is_null'                                          => true,
            'no_trailing_comma_in_list_call'                   => true,
            'list_syntax'                                      => ['syntax' => 'short'],
            'no_trailing_comma_in_singleline_array'            => false,
            'no_trailing_whitespace'                           => true,
            'no_trailing_whitespace_in_comment'                => true,
            'no_unneeded_control_parentheses'                  => true,
            'no_unneeded_curly_braces'                         => true,
            'control_structure_continuation_position'          => ['position' => 'same_line'],
            'no_unset_cast'                                    => true,
            'no_unset_on_property'                             => true,
            'no_unreachable_default_argument_value'            => true,
            'no_useless_return'                                => true,
            'no_useless_else'                                  => true,
            'no_whitespace_before_comma_in_array'              => true,
            'no_whitespace_in_blank_line'                      => true,
            'normalize_index_brace'                            => true,
            'not_operator_with_successor_space'                => true,
            'object_operator_without_whitespace'               => true,
            'ordered_imports'                                  => [
                'imports_order'  => [
                    'class', 'function', 'const',
                ],
                'sort_algorithm' => 'alpha',
            ],
            'phpdoc_indent'                                    => true,
            'phpdoc_no_access'                                 => true,
            'phpdoc_no_package'                                => true,
            'ordered_class_elements'                           => ['order' => [
                'use_trait',
                'constant_public',
                'constant_protected',
                'constant_private',
                'property_public',
                'property_protected',
                'property_private',
                'construct',
                'destruct',
                'magic',
                'phpunit',
            ],
            ],
            'ordered_interfaces'                               => true,
            'ordered_traits'                                   => true,
            'phpdoc_no_useless_inheritdoc'                     => true,
            'phpdoc_scalar'                                    => true,
            'phpdoc_single_line_var_spacing'                   => true,
            'phpdoc_summary'                                   => true,
            'phpdoc_to_comment'                                => true,
            'phpdoc_trim'                                      => true,
            'phpdoc_types'                                     => true,
            'phpdoc_var_without_name'                          => true,
            'psr_autoloading'                                  => true,
            'self_accessor'                                    => true,
            'short_scalar_cast'                                => true,
            'simplified_null_return'                           => true,
            'simplified_if_return'                             => true,
            'single_blank_line_at_eof'                         => true,
            'single_blank_line_before_namespace'               => true,
            'single_class_element_per_statement'               => true,
            'single_trait_insert_per_statement'                => true,
            'single_import_per_statement'                      => true,
            'single_line_after_imports'                        => true,
            'single_line_comment_style'                        => [
                'comment_types' => ['hash'],
            ],
            'single_quote'                                     => true,
            'string_length_to_empty'                           => true,
            'space_after_semicolon'                            => true,
            'escape_implicit_backslashes'                      => true,
            'explicit_string_variable'                         => true,
            'standardize_not_equals'                           => true,
            'standardize_increment'                            => true,
            'switch_case_semicolon_to_colon'                   => true,
            'switch_case_space'                                => true,
            'switch_continue_to_break'                         => true,
            'ternary_operator_spaces'                          => true,
            'ternary_to_null_coalescing'                       => true,
            'trailing_comma_in_multiline'                      => ['elements' => ['arrays']],
            'trim_array_spaces'                                => true,
            'array_indentation'                                => true,
            'unary_operator_spaces'                            => true,
            'visibility_required'                              => [
                'elements' => ['method', 'property'],
            ],
            'whitespace_after_comma_in_array'                  => true,
            'no_unused_imports'                                => true,
            'multiline_comment_opening_closing'                => true,
            'yoda_style'                                       => [
                'equal'            => false,
                'identical'        => false,
                'less_and_greater' => false,
            ],
            'void_return'                                      => true,
            'return_type_declaration'                          => true,
            'types_spaces'                                     => ['space' => 'single'],
            'return_assignment'                                => true,
            'nullable_type_declaration_for_default_null_value' => true,
            'assign_null_coalescing_to_coalesce_equal'         => true,

            // PHPUnit methods
            'php_unit_construct'                               => true,
            'php_unit_dedicate_assert'                         => true,
            'php_unit_dedicate_assert_internal_type'           => true,
            'php_unit_expectation'                             => true,
            'php_unit_method_casing'                           => ['case' => 'snake_case'],
            'php_unit_mock'                                    => true,
            'php_unit_mock_short_will_return'                  => true,
            'php_unit_no_expectation_annotation'               => true,
            'php_unit_strict'                                  => false,
            'php_unit_test_annotation'                         => ['style' => 'annotation'],
            'php_unit_test_case_static_method_calls'           => ['call_type' => 'this'],
            'method_chaining_indentation'                      => true,

        ];
    }
}
