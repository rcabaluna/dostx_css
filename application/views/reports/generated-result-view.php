<div class="m-t-25">
                <h5>Part I. Respondents Demographic Profile</h5>
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr class="text-center">
                            <th></th>
                            <th>External</th>
                            <th>Internal</th>
                            <th>Overall</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4"><b>Client Type</b></td>
                        </tr>
                        <?php
                            foreach ($clienttype as $clienttypeRow) { ?>
                                <tr>
                                    <td><?= isset($clienttypeRow['name']) ? $clienttypeRow['name'] : '' ?></td>
                                    <td class="text-center">
                                        <?= isset($clienttypeRow['external_count']) ? $clienttypeRow['external_count'] : 0 ?> 
                                        <small>(
                                            <?= ($ctype_total_external ?? 0) != 0 
                                                ? round(($clienttypeRow['external_count'] ?? 0) / $ctype_total_external * 100, 1) 
                                                : 0 
                                            ?>%
                                        </small>
                                    </td>
                                    <td class="text-center">
                                        <?= isset($clienttypeRow['internal_count']) ? $clienttypeRow['internal_count'] : 0 ?> 
                                        <small>(
                                            <?= ($ctype_total_internal ?? 0) != 0 
                                                ? round(($clienttypeRow['internal_count'] ?? 0) / $ctype_total_internal * 100, 1) 
                                                : 0 
                                            ?>%
                                        </small>
                                    </td>
                                    <td class="text-center">
                                        <?= ($clienttypeRow['external_count'] ?? 0) + ($clienttypeRow['internal_count'] ?? 0) ?> 
                                        <small>(
                                            <?= ($clienttypeRow['total_overall'] ?? 0) != 0 
                                                ? round(($clienttypeRow['total_per_ctype'] ?? 0) / $clienttypeRow['total_overall'] * 100, 1) 
                                                : 0 
                                            ?>%
                                        </small>
                                    </td>
                                </tr>

                                <?php
                            }
                        ?>
                        <tr>
                            <td colspan="4">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>Age Distribution</b></td>
                        </tr>
                        <tr>
                        <td>19 or lower</td>
                        <td class="text-center">
                                        <?= ($age_distribution['external_19_or_lower'] ?? 0) . ' <small>(' . 
                                            (($age_distribution['total_external_count'] ?? 0) != 0 
                                                ? round((($age_distribution['external_19_or_lower'] ?? 0) / $age_distribution['total_external_count']) * 100,1) 
                                                : 0) . '%)</small>' ?>
                                    </td>
                        <td class="text-center">
                                        <?= ($age_distribution['internal_19_or_lower'] ?? 0) . ' <small>(' . 
                                            (($age_distribution['total_internal_count'] ?? 0) != 0 
                                                ? round((($age_distribution['internal_19_or_lower'] ?? 0) / $age_distribution['total_internal_count']) * 100,1) 
                                                : 0) . '%)</small>' ?>
                                    </td>
                        <td class="text-center">
                                <?= 
                                    ($age_distribution['total_19_or_lower'] ?? 0) . 
                                    ' <small>(' . 
                                    (($age_distribution['all_total'] ?? 0) != 0 
                                        ? round(($age_distribution['total_19_or_lower'] ?? 0) / $age_distribution['all_total'] * 100, 1) 
                                        : 0) . '%)</small>' 
                                ?>
                        </td>
                    </tr>
                    <tr>
                        <td>20-34</td>
                        <td class="text-center">
                                        <?= ($age_distribution['external_20_34'] ?? 0) . ' <small>(' . 
                                            (($age_distribution['total_external_count'] ?? 0) != 0 
                                                ? round((($age_distribution['external_20_34'] ?? 0) / $age_distribution['total_external_count']) * 100,1) 
                                                : 0) . '%)</small>' ?>
                                    </td>
                        <td class="text-center">
                                        <?= ($age_distribution['internal_20_34'] ?? 0) . ' <small>(' . 
                                            (($age_distribution['total_internal_count'] ?? 0) != 0 
                                                ? round((($age_distribution['internal_20_34'] ?? 0) / $age_distribution['total_internal_count']) * 100,1) 
                                                : 0) . '%)</small>' ?>
                                    </td>
                                    <td class="text-center">
                                <?= 
                                    ($age_distribution['total_20_34'] ?? 0) . 
                                    ' <small>(' . 
                                    (($age_distribution['all_total'] ?? 0) != 0 
                                        ? round(($age_distribution['total_20_34'] ?? 0) / $age_distribution['all_total'] * 100, 1) 
                                        : 0) . '%)</small>' 
                                ?>
                        </td>
                    </tr>
                    <tr>
                        <td>35-49</td>
                        <td class="text-center">
                                        <?= ($age_distribution['external_35_49'] ?? 0) . ' <small>(' . 
                                            (($age_distribution['total_external_count'] ?? 0) != 0 
                                                ? round((($age_distribution['external_35_49'] ?? 0) / $age_distribution['total_external_count']) * 100,1) 
                                                : 0) . '%)</small>' ?>
                                    </td>
                        <td class="text-center">
                                        <?= ($age_distribution['internal_35_49'] ?? 0) . ' <small>(' . 
                                            (($age_distribution['total_internal_count'] ?? 0) != 0 
                                                ? round((($age_distribution['internal_35_49'] ?? 0) / $age_distribution['total_internal_count']) * 100,1) 
                                                : 0) . '%)</small>' ?>
                                    </td>
                                    <td class="text-center">
                                    <?= 
                                    ($age_distribution['total_35_49'] ?? 0) . 
                                    ' <small>(' . 
                                    (($age_distribution['all_total'] ?? 0) != 0 
                                        ? round(($age_distribution['total_35_49'] ?? 0) / $age_distribution['all_total'] * 100, 1) 
                                        : 0) . '%)</small>' 
                                ?>
                                    </td>
                    </tr>
                    <tr>
                        <td>50-64</td>
                        <td class="text-center">
                                        <?= ($age_distribution['external_50_64'] ?? 0) . ' <small>(' . 
                                            (($age_distribution['total_external_count'] ?? 0) != 0 
                                                ? round((($age_distribution['external_50_64'] ?? 0) / $age_distribution['total_external_count']) * 100,1) 
                                                : 0) . '%)</small>' ?>
                                    </td>
                        <td class="text-center">
                                        <?= ($age_distribution['internal_50_64'] ?? 0) . ' <small>(' . 
                                            (($age_distribution['total_internal_count'] ?? 0) != 0 
                                                ? round((($age_distribution['internal_50_64'] ?? 0) / $age_distribution['total_internal_count']) * 100,1) 
                                                : 0) . '%)</small>' ?>
                                    </td>
                                    <td class="text-center"><?= 
                                    ($age_distribution['total_50_64'] ?? 0) . 
                                    ' <small>(' . 
                                    (($age_distribution['all_total'] ?? 0) != 0 
                                        ? round(($age_distribution['total_50_64'] ?? 0) / $age_distribution['all_total'] * 100, 1) 
                                        : 0) . '%)</small>' 
                                ?></td>
                    </tr>
                    <tr>
                        <td>65 or higher</td>
                        <td class="text-center">
                                        <?= ($age_distribution['external_65_or_higher'] ?? 0) . ' <small>(' . 
                                            (($age_distribution['total_external_count'] ?? 0) != 0 
                                                ? round((($age_distribution['external_65_or_higher'] ?? 0) / $age_distribution['total_external_count']) * 100,1) 
                                                : 0) . '%)</small>' ?>
                                    </td>
                        <td class="text-center">
                                        <?= ($age_distribution['internal_65_or_higher'] ?? 0) . ' <small>(' . 
                                            (($age_distribution['total_internal_count'] ?? 0) != 0 
                                                ? round((($age_distribution['internal_65_or_higher'] ?? 0) / $age_distribution['total_internal_count']) * 100,1) 
                                                : 0) . '%)</small>' ?>
                                    </td>
                                    <td class="text-center">
                                    <?= 
                                    ($age_distribution['total_65_or_higher'] ?? 0) . 
                                    ' <small>(' . 
                                    (($age_distribution['all_total'] ?? 0) != 0 
                                        ? round(($age_distribution['total_65_or_higher'] ?? 0) / $age_distribution['all_total'] * 100, 1) 
                                        : 0) . '%)</small>' 
                                ?>
                                    </td>
                    </tr>
                    <tr>
                        <td colspan="4">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="4"><b>Vulnerable Sector Served</b></td>
                    </tr>
                    <tr>
                        <td>Senior Citizen</td>
                        <td class="text-center">
                            <?= ($vulsector['Senior_Citizen_External_Count'] ?? 0) . ' <small>(' . 
                                (($vulsector['external_total'] ?? 0) != 0 
                                    ? round((($vulsector['Senior_Citizen_External_Count'] ?? 0) / $vulsector['external_total']) * 100,1) 
                                    : 0) . '%)</small>' ?>
                        </td>
                        <td class="text-center">
                            <?= ($vulsector['Senior_Citizen_Internal_Count'] ?? 0) . ' <small>(' . 
                                (($vulsector['internal_total'] ?? 0) != 0 
                                    ? round((($vulsector['Senior_Citizen_Internal_Count'] ?? 0) / $vulsector['internal_total']) * 100,1) 
                                    : 0) . '%)</small>' ?>
                        </td>
                        <td class="text-center">
                            <?= ($vulsector['Senior_Citizen_Total_Count'] ?? 0) . ' <small>(' . 
                                (($vulsector['overall_total'] ?? 0) != 0 
                                    ? round((($vulsector['Senior_Citizen_Total_Count'] ?? 0) / $vulsector['overall_total']) * 100,1) 
                                    : 0) . '%)</small>' ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Persons with Disabilities</td>
                        <td class="text-center">
                            <?= ($vulsector['PWD_External_Count'] ?? 0) . ' <small>(' . 
                                (($vulsector['external_total'] ?? 0) != 0 
                                    ? round((($vulsector['PWD_External_Count'] ?? 0) / $vulsector['external_total']) * 100,1) 
                                    : 0) . '%)</small>' ?>
                        </td>
                        <td class="text-center">
                            <?= ($vulsector['PWD_Internal_Count'] ?? 0) . ' <small>(' . 
                                (($vulsector['internal_total'] ?? 0) != 0 
                                    ? round((($vulsector['PWD_Internal_Count'] ?? 0) / $vulsector['internal_total']) * 100,1) 
                                    : 0) . '%)</small>' ?>
                        </td>
                        <td class="text-center">
                            <?= ($vulsector['PWD_Total_Count'] ?? 0) . ' <small>(' . 
                                (($vulsector['overall_total'] ?? 0) != 0 
                                    ? round((($vulsector['PWD_Total_Count'] ?? 0) / $vulsector['overall_total']) * 100,1) 
                                    : 0) . '%)</small>' ?>
                        </td>
                    </tr>
                    <tr>
                        <td>4Ps Beneficiaries</td>
                        <td class="text-center">
                            <?= ($vulsector['4Ps_Beneficiaries_External_Count'] ?? 0) . ' <small>(' . 
                                (($vulsector['external_total'] ?? 0) != 0 
                                    ? round((($vulsector['4Ps_Beneficiaries_External_Count'] ?? 0) / $vulsector['external_total']) * 100,1) 
                                    : 0) . '%)</small>' ?>
                        </td>
                        <td class="text-center">
                            <?= ($vulsector['4Ps_Beneficiaries_Internal_Count'] ?? 0) . ' <small>(' . 
                                (($vulsector['internal_total'] ?? 0) != 0 
                                    ? round((($vulsector['4Ps_Beneficiaries_Internal_Count'] ?? 0) / $vulsector['internal_total']) * 100,1) 
                                    : 0) . '%)</small>' ?>
                        </td>
                        <td class="text-center">
                            <?= ($vulsector['4Ps_Beneficiaries_Total_Count'] ?? 0) . ' <small>(' . 
                                (($vulsector['overall_total'] ?? 0) != 0 
                                    ? round((($vulsector['4Ps_Beneficiaries_Total_Count'] ?? 0) / $vulsector['overall_total']) * 100,1) 
                                    : 0) . '%)</small>' ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Indigenous People</td>
                        <td class="text-center">
                            <?= ($vulsector['Indigenous_People_External_Count'] ?? 0) . ' <small>(' . 
                                (($vulsector['external_total'] ?? 0) != 0 
                                    ? round((($vulsector['Indigenous_People_External_Count'] ?? 0) / $vulsector['external_total']) * 100,1) 
                                    : 0) . '%)</small>' ?>
                        </td>
                        <td class="text-center">
                            <?= ($vulsector['Indigenous_People_Internal_Count'] ?? 0) . ' <small>(' . 
                                (($vulsector['internal_total'] ?? 0) != 0 
                                    ? round((($vulsector['Indigenous_People_Internal_Count'] ?? 0) / $vulsector['internal_total']) * 100,1) 
                                    : 0) . '%)</small>' ?>
                        </td>
                        <td class="text-center">
                            <?= ($vulsector['Indigenous_People_Total_Count'] ?? 0) . ' <small>(' . 
                                (($vulsector['overall_total'] ?? 0) != 0 
                                    ? round((($vulsector['Indigenous_People_Total_Count'] ?? 0) / $vulsector['overall_total']) * 100,1) 
                                    : 0) . '%)</small>' ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Did Not Specify</td>
                        <td class="text-center">
                            <?= ($vulsector['NA_External'] ?? 0) . ' <small>(' . 
                                (($vulsector['external_total'] ?? 0) != 0 
                                    ? round((($vulsector['NA_External'] ?? 0) / $vulsector['external_total']) * 100,1) 
                                    : 0) . '%)</small>' ?>
                        </td>
                        <td class="text-center">
                            <?= ($vulsector['NA_Internal'] ?? 0) . ' <small>(' . 
                                (($vulsector['internal_total'] ?? 0) != 0 
                                    ? round((($vulsector['NA_Internal'] ?? 0) / $vulsector['internal_total']) * 100,1) 
                                    : 0) . '%)</small>' ?>
                        </td>
                        <td class="text-center">
                            <?= ($vulsector['NA_Total'] ?? 0) . ' <small>(' . 
                                (($vulsector['overall_total'] ?? 0) != 0 
                                    ? round((($vulsector['NA_Total'] ?? 0) / $vulsector['overall_total']) * 100,1) 
                                    : 0) . '%)</small>' ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="4"><b>Sex</b></td>
                    </tr>
                    <tr>
                        <td>Male</td>
                        <td class="text-center"><?=($sex['external_male'] ?? 0) . ' <small>(' . 
                                            (($sex['total_external'] ?? 0) != 0 
                                                ? round((($sex['external_male'] ?? 0) / $sex['total_external']) * 100,1) 
                                                : 0) . '%)</small>' ?></td>
                        <td class="text-center"><?=($sex['internal_male'] ?? 0) . ' <small>(' . 
                                            (($sex['total_internal'] ?? 0) != 0 
                                                ? round((($sex['internal_male'] ?? 0) / $sex['total_internal']) * 100,1) 
                                                : 0) . '%)</small>' ?></td>
                        <td class="text-center"> <?= 
                                    ($sex['total_male'] ?? 0) . 
                                    ' <small>(' . 
                                    (($sex['all_total'] ?? 0) != 0 
                                        ? round(($sex['total_male'] ?? 0) / $sex['all_total'] * 100, 1) 
                                        : 0) . '%)</small>' 
                                ?></td>
                    </tr>
                    </tr>
                    <tr>
                        <td>Female</td>
                        <td class="text-center"><?=($sex['external_female'] ?? 0) . ' <small>(' . 
                                            (($sex['total_external'] ?? 0) != 0 
                                                ? round((($sex['external_female'] ?? 0) / $sex['total_external']) * 100,1) 
                                                : 0) . '%)</small>' ?></td>
                        <td class="text-center"><?=($sex['internal_female'] ?? 0) . ' <small>(' . 
                                            (($sex['total_internal'] ?? 0) != 0 
                                                ? round((($sex['internal_female'] ?? 0) / $sex['total_internal']) * 100,1) 
                                                : 0) . '%)</small>' ?></td>
                        <td class="text-center"> <?= 
                                    ($sex['total_female'] ?? 0) . 
                                    ' <small>(' . 
                                    (($sex['all_total'] ?? 0) != 0 
                                        ? round(($sex['total_female'] ?? 0) / $sex['all_total'] * 100, 1) 
                                        : 0) . '%)</small>' 
                                ?></td>
                    </tr>
                    </tbody>
                </table>

                <h5>Part II. Results of Citizen's Charter Questions</h5>
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>Citizen's Charter Answers</th>
                            <th class="text-center">Responses</th>
                            <th class="text-center">Percentage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>CC1. Which of the following describes your awareness of the CC?</b></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1. I know what a CC is and I saw this office's CC.</td>
                            <td class="text-center"><?=($cc['4_CC1'] ?? 0)?></td>
                            <td class="text-center"><?=(($cc['Total_CC1'] ?? 0) != 0 
                                ? round((($cc['4_CC1'] ?? 0) / $cc['Total_CC1']) * 100,1) 
                                : 0) . '%' ?></td>
                        </tr>
                        <tr>
                            <td>2. I know what a CC is but I did not see this office's CC.</td>
                            <td class="text-center"><?=($cc['3_CC1'] ?? 0)?></td>
                            <td class="text-center"><?=(($cc['Total_CC1'] ?? 0) != 0 
                                ? round((($cc['3_CC1'] ?? 0) / $cc['Total_CC1']) * 100,1) 
                                : 0) . '%' ?></td>
                        </tr>
                        <tr>
                            <td>3. I learned of the CC only when I saw this office's CC.</td>
                            <td class="text-center"><?=($cc['2_CC1'] ?? 0)?></td>
                            <td class="text-center"><?=(($cc['Total_CC1'] ?? 0) != 0 
                                ? round((($cc['2_CC1'] ?? 0) / $cc['Total_CC1']) * 100,1) 
                                : 0) . '%' ?></td>
                        </tr>
                        <tr>
                            <td>4. I do not know what a CC is and I did not see this office's CC.</td>
                            <td class="text-center"><?=($cc['1_CC1'] ?? 0)?></td>
                            <td class="text-center"><?=(($cc['Total_CC1'] ?? 0) != 0 
                                ? round((($cc['1_CC1'] ?? 0) / $cc['Total_CC1']) * 100,1) 
                                : 0) . '%' ?></td>
                        </tr>
                        <tr>
                            <td><b>CC2. If aware of CC, would you say that the CC of this office was...?</b></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1. Easy to see</td>
                            <td class="text-center"><?=($cc['4_CC2'] ?? 0)?></td>
                            <td class="text-center"><?=(($cc['Total_CC2'] ?? 0) != 0 
                                ? round((($cc['4_CC2'] ?? 0) / $cc['Total_CC2']) * 100,1) 
                                : 0) . '%' ?></td>
                        </tr>
                        <tr>
                            <td>2. Somewhat easy to see</td>
                            <td class="text-center"><?=($cc['3_CC2'] ?? 0)?></td>
                            <td class="text-center"><?=(($cc['Total_CC2'] ?? 0) != 0 
                                ? round((($cc['3_CC2'] ?? 0) / $cc['Total_CC2']) * 100,1) 
                                : 0) . '%' ?></td>
                        </tr>
                        <tr>
                            <td>3. Difficult to see</td>
                            <td class="text-center"><?=($cc['2_CC2'] ?? 0)?></td>
                            <td class="text-center"><?=(($cc['Total_CC2'] ?? 0) != 0 
                                ? round((($cc['2_CC2'] ?? 0) / $cc['Total_CC2']) * 100,1) 
                                : 0) . '%' ?></td>
                        </tr>
                        <tr>
                            <td>4. Not visible at all</td>
                            <td class="text-center"><?=($cc['1_CC2'] ?? 0)?></td>
                            <td class="text-center"><?=(($cc['Total_CC2'] ?? 0) != 0 
                                ? round((($cc['1_CC2'] ?? 0) / $cc['Total_CC2']) * 100,1) 
                                : 0) . '%' ?></td>
                        </tr>
                        <tr>
                            <td><b>CC3. If aware of CC, how much did the CC help you in your transaction?</b></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1. Helped very much</td>
                            <td class="text-center"><?=($cc['3_CC3'] ?? 0)?></td>
                            <td class="text-center"><?=(($cc['Total_CC3'] ?? 0) != 0 
                                ? round((($cc['3_CC3'] ?? 0) / $cc['Total_CC3']) * 100,1) 
                                : 0) . '%' ?></td>
                        </tr>
                        <tr>
                            <td>2. Somewhat helped</td>
                            <td class="text-center"><?=($cc['2_CC3'] ?? 0)?></td>
                            <td class="text-center"><?=(($cc['Total_CC3'] ?? 0) != 0 
                                ? round((($cc['2_CC3'] ?? 0) / $cc['Total_CC3']) * 100,1) 
                                : 0) . '%' ?></td>
                        </tr>
                        <tr>
                            <td>3. Did not help</td>
                            <td class="text-center"><?=($cc['1_CC3'] ?? 0)?></td>
                            <td class="text-center"><?=(($cc['Total_CC3'] ?? 0) != 0 
                                ? round((($cc['1_CC3'] ?? 0) / $cc['Total_CC3']) * 100,1) 
                                : 0) . '%' ?></td>
                        </tr>
                    </tbody>
                </table>
                <h5>Part III. Score Per Service</h5>
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr class="text-center">
                            <th>Services</th>
                            <th>No. of Respondents</th>
                            <th>% share to overall <br> no. of responses</th>
                            <th>No. of Responses with rating <br> of VS and above*</th>
                            <th>Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan=5><strong>External Services</strong></td>
                        </tr>
                        <?php foreach ($services_external as $services_externalRow) { ?>
                            <tr>
                                <td><?php echo $services_externalRow['name'] . ($services_externalRow['unit'] ? " - " : '') . $services_externalRow['unit'] . ($services_externalRow['is_cc'] == 1 ? "*" : ''); ?></td>
                                <td class="text-center"><?=$services_externalRow['xcount']?></td>
                                <td class="text-center"><?=$services_externalRow['percentx']."%"?></td>
                                <td class="text-center"><?=$services_externalRow['vs_xcount']?></td>
                                <td class="text-center"><?=$services_externalRow['xx']."%"?></td>
                            </tr>
                        <?php }?>
                        <tr>
                            <td colspan=5><strong>Internal Services</strong></td>
                        </tr>
                        <?php foreach ($services_internal as $services_internalRow) { ?>
                            <tr>
                                <td><?php echo $services_internalRow['name'] . ($services_internalRow['name'] && $services_internalRow['unit'] ? " - " : '') . $services_internalRow['unit'] . ($services_internalRow['is_cc'] == 1 ? "*" : ''); ?></td>
                                <td class="text-center"><?=$services_internalRow['xcount']?></td>
                                <td class="text-center"><?=$services_internalRow['percentx']."%"?></td>
                                <td class="text-center"><?=$services_internalRow['vs_xcount']?></td>
                                <td class="text-center"><?=$services_internalRow['xx']."%"?></td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
                <h5>Part IV. Results of Service Quality Dimensions</h5>
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr class="text-center">
                            <th>SQD</th>
                            <th>Strongly Agree</th>
                            <th>Agree</th>
                            <th>Neither Agree or Disagree</th>
                            <th>Disagree</th>
                            <th>Strongly Disagree</th>
                            <th>Total Responses</th>
                            <th>Overall</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">SQD0</td>
                            <?php for ($i=5; $i >=1 ; $i--) { ?>
                                <td class="text-center"><?=($sqd[$i.'_SQD0'] ?? 0)?></td>
                            <?php } ?>
                            <td class="text-center"><?=($sqd['Total_SQD0'] ?? 0)?></td>
                            <td class="text-center">
                                <?php $highest_possible_score = $sqd['Total_SQD0']*5;
                                        $xtotal = 0;
                                        for ($i=1; $i <= 5; $i++) { 
                                            $xtotal += $sqd[$i.'_SQD0']*$i;
                                        }

                                        $sqd0_percentage = ($highest_possible_score != 0) ? round(($xtotal / $highest_possible_score) * 100, 1) : 0;
                                        echo $sqd0_percentage . '%';
                                    ?>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-bordered table-sm">
                    <thead>
                        <tr class="text-center">
                            <th>Service Quality Dimensions</th>
                            <th>Strongly Agree</th>
                            <th>Agree</th>
                            <th>Neither Agree or Disagree</th>
                            <th>Disagree</th>
                            <th>Strongly Disagree</th>
                            <th>Total Responses</th>
                            <th>Overall</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        function generateRow($title, $sqd, $sqdKey) {
                            ?>
                            <tr>
                                <td><?= $title ?></td>
                                <?php for ($i = 5; $i >= 1; $i--) { ?>
                                    <td class="text-center"><?= ($sqd[$i . '_' . $sqdKey] ?? 0) ?></td>
                                <?php } ?>
                                <td class="text-center"><?= ($sqd['Total_' . $sqdKey] ?? 0) ?></td>
                                <td class="text-center">
                                    <?php 
                                    $xsum = 0;
                                    for ($i = 5; $i >= 1; $i--) {
                                        $temp = $i * ($sqd[$i . '_' . $sqdKey] ?? 0);
                                        $xsum += $temp;
                                    }
                                    $max_possible_score = ($sqd['Total_' . $sqdKey] ?? 0) * 5;
                                    $percentage = ($max_possible_score != 0) ? round(($xsum / $max_possible_score) * 100, 1) : 0;
                                    echo $percentage . '%';
                                    ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>

                            <!-- Usage Example -->
                            <?php
                            generateRow('Responsiveness', $sqd, 'SQD1');
                            generateRow('Reliability', $sqd, 'SQD2');
                            generateRow('Access and Facilities', $sqd, 'SQD3');
                            generateRow('Communication', $sqd, 'SQD4');
                            generateRow('Costs', $sqd, 'SQD5');
                            generateRow('Integrity', $sqd, 'SQD6');
                            generateRow('Assurance', $sqd, 'SQD7');
                            generateRow('Outcome', $sqd, 'SQD8');
                            ?>
                        <tr>
                            <td><b>Overall</b></td>
                            <td class="text-center"><?php $overall_sum = $sum_5 = 0; for ($i=1; $i <=8 ; $i++) { $sum_5+=$sqd['5_SQD'.$i] ?? 0?>
                            <?php } $overall_sum+=$sum_5; ?>
                            <strong><?=$sum_5?></strong></td>
                            <td class="text-center"><?php $sum_4 = 0; for ($i=1; $i <=8 ; $i++) { $sum_4+=$sqd['4_SQD'.$i] ?? 0?>
                            <?php } $overall_sum+=$sum_4;?>
                            <strong><?=$sum_4?></strong></td>
                            <td class="text-center"><?php $sum_3 = 0; for ($i=1; $i <=8 ; $i++) { $sum_3+=$sqd['3_SQD'.$i] ?? 0?>
                            <?php } $overall_sum+=$sum_3;?>
                            <strong><?=$sum_3?></strong></td>
                            <td class="text-center"><?php $sum_2 = 0; for ($i=1; $i <=8 ; $i++) { $sum_2+=$sqd['2_SQD'.$i] ?? 0?>
                            <?php } $overall_sum+=$sum_2; ?>
                            <strong><?=$sum_2?></strong></td>
                            <td class="text-center"><?php $sum_1 = 0; for ($i=1; $i <=8 ; $i++) { $sum_1+=$sqd['1_SQD'.$i] ?? 0?>
                            <?php } $overall_sum+=$sum_1;?>
                            <strong><?=$sum_1?></strong></td>
                            <td class="text-center"><strong><?=$overall_sum;?></strong></td>
                            <td class="text-center">
                                <strong>
                                <?php $highest_possible_score = $overall_sum*5;
                                        $xtotal = 0;
                                        for ($i=1; $i <= 5; $i++) { 
                                            $xtotal += ${'sum_' . $i}*$i;
                                        }

                                        $percentage = ($highest_possible_score != 0) ? round(($xtotal / $highest_possible_score) * 100, 1) : 0;
                                        echo $percentage . '%';
                                    ?>
                                </strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h5>Part V. Repondents Demographic Profile</h5>
                <p><?=$officename['name']?> Overall Customer Satisfaction  Rating for
                
                <?php
                    if ($params['typeselector'] == 'semester') {
                        if ($params['semesterid'] != "all") {
                            if ($params['semesterid'] == 1) {
                                echo "1st Semester -";
                            }else{
                                echo "2nd Semester -";
                            }
                        }
                    }

                    if ($params['typeselector'] == 'quarter') {
                        switch ($params['quarterid']) {
                            case 1:
                                echo "1st Quarter -";
                                break;
                                case 2:
                                    echo "2nd Quarter -";
                                    break;case 3:
                                        echo "3rd Quarter -";
                                        break;case 4:
                                            echo "4th Quarter -";
                                            break;
                            default:
                                break;
                        }
                    }
                ?>
                <?=$params['year']?> is <strong><?=$sqd0_percentage?>%</strong></p>

                <p><b>The interpretation of the results are as follows:</b></p>
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>Percentage</th>
                            <th>Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Below 60.0%</td>
                            <td>Poor</td>
                        </tr>
                        <tr>
                            <td>60.0% - 79.9%</td>
                            <td>Fair</td>
                        </tr>
                        <tr>
                            <td>80.0% - 89.9%</td>
                            <td>Satisfactory</td>
                        </tr>
                        <tr>
                            <td>90.0% - 94.9%</td>
                            <td>Very Satisfactory</td>
                        </tr>
                        <tr>
                            <td>95% - 100%</td>
                            <td>Outstanding</td>
                        </tr>
                    </tbody>
                </table>
                <h5>Annex. Comments or suggestions from the clients or customers.</h5>
            </div>