<?php

$form = [
    'fields' => [
        'Mano vardas' => [
            'label' => 'Vardas',
            'type' => 'text',
            'placeholder' => 'Vardas',
        ],
        'Kiek zirniu turiu' => [
            'label' => 'Zirniai',
            'type' => 'text',
            'placeholder' => '1-100',
        ],
        'Paslaptis kodel turiu zirniu' => [
            'label' => 'Reason',
            'type' => 'password',
            'placeholder' => 'Issipasakok',
        ],
    ],
    'buttons' => [
        'do_zirniai' => [
            'value' => 'do_zirniai',
            'label' => 'paberti...',
        ],
        'do_grikiai' => [
            'value' => 'do_grikiai',
            'label' => 'paberti...',
        ],
    ],
];

?>
<html>
    <head>
        <title>uzduotis #3</title>
        <style>
            .inputs{
                display:block;
                margin-top:1%;
                width: 200px;
            }
            button{
                margin-top:1%;
            }
        </style>
    </head>
    <body>
        <form method="POST">
            <?php foreach ($form['fields'] as $field_id => $field): ?>
                <label class="inputs">
                    <span><?php print $field_id; ?></span>
                    <input type="<?php print $field['type']; ?>" name="<?php print $field['label']; ?>" placeholder="<?php print $field['placeholder']; ?>" >
                </label>
            <?php endforeach; ?>
            <?php foreach ($form['buttons'] as $button_id => $button): ?>
                <button name="action" value="<?php print $button['value']; ?>">
                    <?php print $button['label']; ?>
                </button>
            <?php endforeach; ?>
        </form>
    </body>
</html>