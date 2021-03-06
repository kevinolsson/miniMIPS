		<?php if(isset($error)) { ?>
		<div class="row">
			<div class="large-12 columns">
				<p class="error">
						<?php echo $error; ?>				
				</p>
			</div>
		</div>
		<?php } ?>

		<?php	echo form_open('simulate/'); ?>
		<div class="row">
			<div class="large-8 columns left">
				<?php
				echo form_textarea(
					array('
						name'=>'instructions',
						'class'=>'command-line',
						'spellcheck' => 'false',
						'value' =>
						'BEQZ R6, L1;&#13;&#10;LD R1, 1000(R2);&#13;&#10;DADDIU R3, R0, #0003;&#13;&#10;DSUBU R5, R1, R3;&#13;&#10;L1: SD R5, 1000(R7);'
						)
					);
					 ?>
			</div>

			<div class="large-4 columns left">
			<?php echo form_textarea(
				array('
					name'=>'init',
					'class'=>'command-line2',
					'spellcheck' => 'false',
					'value'=>'## INITIALIZE REGISTERS ##;&#13;&#10;R1: 0000000000000002;&#13;&#10;R2: 0000000000000008;&#13;&#10;R3: 0000000000000004;&#13;&#10;R4: 0000000000000005;&#13;&#10;R5: 0000000000000008;&#13;&#10;R6: 0000000000000001;&#13;&#10;R7: 0000000000000000;&#13;&#10;R8: 0000000000000004;&#13;&#10;&#13;&#10;## INITIALIZE MEMORY ##;&#13;&#10;0X1008 AB;&#13;&#10;0X1009 CD;&#13;&#10;0X100A EF;&#13;&#10;0X100B 11;&#13;&#10;0X100C 22;&#13;&#10;0X100D 33;&#13;&#10;0X100E 44;&#13;&#10;0X100F 55;'
					)
					); ?>
			</div>
		</div>
		<div class="row">
			<div class="large-3 columns">
				<?php echo form_submit(array('class'=>'simulate','value'=>'Simulate!')); ?>
			</div>
			<div class="large-9 columns">
				<div class="footer">
				<p>
					<strong>MiniMips</strong> A simulator for a simplified MIPS64 processor. In partial fulfillment of the requirements for the subject 'Computer Architecture' at De La Salle University.
				</p>
				<p>
					<strong>Members:</strong> Yosef Consolacion, Francis Gaddi, Joy Luville Mahinay, Kevin Olsson, Adrea Rufino, Celine Villafuerte</strong> 
				</p>
				</div>
			</div>
		</div>

		<?php echo form_close(); ?>
