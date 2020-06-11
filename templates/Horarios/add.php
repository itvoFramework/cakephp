<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Horario $horario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Horarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="horarios form content">
            <?= $this->Form->create($horario) ?>
            <fieldset>
                <legend><?= __('Add Horario') ?></legend>
                <?php
                    //echo $this->Form->control('catalogo_id', ['options' => $catalogos, 'empty' => true]);

                    echo "Catalogos";
                    echo "<br></br> ";
                    
                    echo"<select name= 'catalogo_id'>";
                    foreach($catalogos as $catalogo){
                        echo"<option value ='".$catalogo['id_catalogos']."'>".$catalogo['titulo']."</option>";
                    }
                    echo"</select>";




                    //echo $this->Form->control('ponente_id', ['options' => $ponentes, 'empty' => true]);

                    
                    echo "Ponentes";
                    echo "<br></br> ";
                    
                    echo"<select name= 'ponente_id'>";
                    foreach($ponentes as $ponente){
                        echo"<option value ='".$ponente['id_ponentes']."'>".$ponente['nombrecompleto']."</option>";
                    }
                    echo"</select>";



                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
