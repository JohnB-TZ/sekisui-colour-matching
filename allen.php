<div class="allen hide">
    <div class="form_heading_section">
        <h2><span>Step 2 of 3:</span> Select a product</h2>
    </div>
    <div class="form_desc_section">
        <p>Need help filling out your form? We’re here to help.</p>
        <p class="required-error"><span>designLab@sekisui-spi.com<span> / </span>1.570.387.6997 x299</span></p>
    </div>
    <div class="form_sub_head">
        <h3>REQUIRED INFORMATION</h3>
    </div>
    <div class="form-group">
        <div class="fullrow">
            <div class="halfwidth row-one">
                <label for="prdselection-allen">Product Line
                    <select class="prdselection-allen" id="prdselection-allen" disabled="disabled" name="prdselection-allen">
                        <option name="ALLEN" value="ALLEN®">ALLEN®</option>
                    </select>
                    <input type="hidden" name="disable_product_line_allen" value="ALLEN®">
                </label>
            </div>
            <div class="halfwidth row-two">
                <label for="product_selection_series">Product Series <span class="required-error">*</span>
                    <select class="product_selection_series require" name="product_selection_series" id="product_selection_series" required>
                        <option name="" value="">-- please select --</option>
                        <option name="UTILITY ABS 1000 SERIES" value="UTILITY ABS 1000 SERIES">UTILITY ABS 1000 SERIES</option>
                        <option name="STANDARD ABS 2000 SERIES" value="STANDARD ABS 2000 SERIES">STANDARD ABS 2000 SERIES</option>
                        <option name="TPO PRODUCTS 3000 SERIES" value="TPO PRODUCTS 3000 SERIES">TPO PRODUCTS 3000 SERIES</option>
                        <option name="FDA SERIES ABS 4000 SERIES" value="FDA SERIES ABS 4000 SERIES">FDA SERIES ABS 4000 SERIES</option>
                        <option name="ASA/ABS WEATHERABLE PRODUCTS 5000 SERIES" value="ASA/ABS WEATHERABLE PRODUCTS 5000 SERIES">ASA/ABS WEATHERABLE PRODUCTS 5000 SERIES
                        </option>
                        <option name="ACRYLIC/ABS WEATHERABLE PRODUCTS 6000 SERIES" value="ACRYLIC/ABS WEATHERABLE PRODUCTS 6000 SERIES">ACRYLIC/ABS WEATHERABLE PRODUCTS 6000 SERIES</option>
                        <option name="PC/ABS PRODUCTS 8000 SERIES" value="PC/ABS PRODUCTS 8000 SERIES">PC/ABS PRODUCTS 8000 SERIES</option>
                        <option name="ALEXTRA AND PC PRODUCTS 9000 SERIES" value="ALEXTRA AND PC PRODUCTS 9000 SERIES">ALEXTRA AND PC PRODUCTS 9000 SERIES</option>
                    </select>
                </label>
            </div>
        </div>
    </div><!-- end .form-group -->
    <div class="form-group">
        <div class="fullrow">
            <div class="halfwidth row-one" id="dynamic_product_binded">
                <label for="prd-select">Product <span class="required-error">*</span>
                    <select class="prd-select require" id="prd-select" name="prd-select">
                        <option name="" value="">-- please select --</option>
                        <option name='ALLEN® 2025LG — [ formerly ULG/UTILITY ]' value="ALLEN® 2025LG — [ formerly ULG/UTILITY ]">ALLEN® 2025LG — [ formerly ULG/UTILITY ]</option>
                        <option name='ALLEN® 2025LG — [ formerly ULG/UTILITY ]22' value="ALLEN® 2025LG — [ formerly ULG/UTILITY ]22">ALLEN® 2025LG — [ formerly ULG/UTILITY ]22</option>
                    </select>
                    <p><strong>Description:</strong> Low gloss, medium impact ABS</p>
                </label>
            </div>
            <div class="halfwidth row-two">
                <label>Product Type <span class="required-error">* </span>
                    <select class="product_type_selection require" id="product_type_selection" name="product_type_selection">
                        <option name="" value="">-- please select --</option>
                        <option name="Interior (light stable)" value="Interior (light stable)">Interior (light stable)</option>
                        <option name="Exterior (weatherable)" value="Exterior (weatherable)">Exterior (weatherable)</option>
                    </select>
                </label>
            </div>
        </div>
    </div><!-- end .form-group -->
    <div class="form-group">
        <div class="fullrow">
            <div class="halfwidth row-one">
                <label class="">FDA? <span class="required-error">*</span>
                    <select class="product_fda_selection require" id="product_fda_selection" name="product_fda_selection">
                        <option name="" value="">-- please select --</option>
                        <option name="No" value="No">No</option>
                        <option name="Yes" value="Yes">Yes</option>
                    </select>
                </label>
            </div>
            <div class="halfwidth row-two">
                <label class="">Metalic Effect? <span class="required-error">*</span>
                    <select class="matalic_effect_selection require" id="matalic_effect_selection" name="matalic_effect_selection">
                        <option name="" value="">-- please select --</option>
                        <option name="No" value="No">No</option>
                        <option name="Yes" value="Yes">Yes</option>
                    </select>
                </label>
            </div>
        </div>
    </div><!-- end .form-group -->
    <div class="form-group">
        <div class="fullrow">
            <div class="halfwidth row-one">
                <label>UV Film Required?
                    <select class="uv_selection require" id="uv_selection" name="uv_selection">
                        <option name="" value="">-- please select --</option>
                        <option name="None" value="None">None</option>
                        <option name="High Gloss Clear" value="High Gloss Clear">High Gloss Clear</option>
                        <option name="Ultra Low Gloss Clear" value="Ultra Low Gloss Clear">Ultra Low Gloss Clear</option>
                    </select>
                </label>
            </div>
            <div class="halfwidth checkrequired row-two">
                <div class="conditional">
                    <label>UL Required? <span class="required-error">*</span>
                        <select class="ul_required " id="ul_required" name="ul_required">
                            <option name="" value="">-- please select --</option>
                            <option name="No" value="No">No</option>
                            <option name="Yes" value="Yes">Yes</option>
                        </select>
                    </label>
                </div>
                <div class="ul_type_next conditional">
                    <label>UL Type? <span class="required-error">*</span>
                        <select class="ul_type " id="ul_type" name="ul_type">
                            <option name="" value="">-- please select --</option>
                            <option name="HB94" value="HB94">HB94</option>
                            <option name="V0" value="V0">V0</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
			</div><!-- end .form-group -->
      <div class="form-group">
            <div class="fullrow">
                <div class="halfwidth">
                    <label class="equalheigh">End Use (e.g., tractor hood, bus interior)<span class="required-error">*</span>
                        <input type="text" class="form-control require" name="enduse" value="">
                    </label>
                </div>

                <div class="halfwidth checkrequired physical_samplediv row-two">
                    <div class="conditional">
                        <label class="">Are you sending physical </br>samples to match? <span class="required-error">*</span>
                            <select class="physical_sample require" id="physical_sample" name="physical_sample">
                                <option name="" value="">-- please select --</option>
                                <option name="No" value="No">No</option>
                                <option name="Yes" value="Yes">Yes</option>
                            </select>
                        </label>
                    </div>
                    <div class="conditional ul_type_next top-margin">
                        <label class="">Return Sample? <span class="required-error">*</span>
                            <select class="return_sample " id="return_sample" name="return_sample">
                                <option name="" value="">-- please select --</option>
                                <option name="No" value="No">No</option>
                                <option name="Yes" value="Yes">Yes</option>
                            </select>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="fullrow">
                <div class="halfwidth">
                    <label>Approval Process <span class="required-error">*</span>
                        <select class="approval_process_allen require" id="approval_process_allen" name="approval_process_allen">
                            <option name="" value=""> --please select-- </option>
                            <option name="Visual Assessment" value="Visual Assessment">Visual Assessment</option>
                            <option name="Spectral Data" value="Spectral Data">Spectral Data</option>
                        </select>
                    </label>
                </div>
                <div class="halfwidth static_addess_field row-two">
                    <label>Send physical samples and copy of form to:
                        <div class="static_address">
                            SEKISUI SPI</br>
                            ATTN: designLab® Colour Development </br>
                            6685 Low Street</br>
                            Bloomsburg, PA 17815
                        </div>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group otheroption">
            <div class="halfrow">
                <div class="conditional">
                    <label>Primary Light Source <span class="required-error">*</span>
                        <select class="primary_light_allen require" id="primary_light_allen" name="primary_light_allen">
                            <option name="" value="">-- please select --</option>
                            <option name="Cool White" value="Cool White">Cool White</option>
                            <option name="Daylight" value="Daylight">Daylight</option>
                            <option name="Other" value="Other">Other</option>
                        </select>
                    </label>
                </div>
                <div class="conditional extra_input allen_other row-two">
                    <label>Other
                        <input type="text" class="othersoption form-control" value="" name="primary_light_other">
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group dateselection">
            <div class="fullrow">
                <div class="halfwidth">
                  <?php $x++; ?>
                    <label>Date Required <span class="required-error">*</span>
                        <span class="datebinding"><input type="text" id="datepicker<?php echo $x; ?>" class="from-control date-picker " name="selected_date_allen" >
															<img src="images/date-icon.png" class="img-responsive date-picker-img " /></span>
                        <p>*Standard lead time is 7 to 10 business days from receipt of colour sample for ALLEN® products.</p>
                    </label>
                </div>
                <div class="halfwidth">
                </div>
            </div>
        </div>

        <div class="divider-heading">
            <h3>OPTIONAL DETAILS</h3>
        </div>

        <div class="form-group">
            <div class="fullrow">
                <label>Description of Colour Submission / Cross References
                    <textarea rows="4" cols="50"></textarea>
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="fullrow">
                <label>Special Requests / Comments
                    <textarea rows="4" cols="50"></textarea>
                </label>
            </div>
        </div>
        <div class="form-group note bottom_border allenbtm">
            <div class="fullrow">
                <div class="caption_title">Note:</div>
                <div class="caption_desc">
                    <p>Colour match samples are for visual reference only, not for testing. </p>
                    <p>Samples will not reflect actual Notes: thickness, measurements, gloss, or texture.</p>
                </div>
            </div>
        </div>

        <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
        <input type="button" name="next" class="next btn btn-info" value="Next" />

    </div>
