<?php
    // This should be moved to the SystemTools Section
    $title = 'Software Section - Drive Imaging and Partitioning';

    require __DIR__ . "/../../templates/tech/baseTechSoftware.tpl";
?>

    <p class="justify"> <span class="boldText"> </span> I have recently tried a program I downloaded awhile back and alot of Linux users say they love, called <span class="red-text">PartImage</span><span class="italics"> (think of a better Norton Ghost)</span> for more File systems.. </p>

    <p class="justify">Some say it has issues with NTFS, others say despite the &quot;experimental&quot; label on NTFS ... It backs up NTFS and restores no problem. </p>

    <p class="justify">I have backed up my Ext3 Ubuntu drive (have not had to reformat that yet to try &quot;restoring&quot; it yet. Working with Windows 7 and XP, Slackware 12, and Ubuntu (or Kbuntu actually ... Ubuntu with KDE interface instead of Gnome), I plan to try NTFS ... I am not planning on wiping out a good NTFS partition to see if the backed up images work. If for some reason you haven't heard of <span class="red-text">PartImage</span> that runs on Linux or Linux Boot CDs, you may think of the following comparisons</p>

    <ul>
        <li><span class="red-text">PartImage</span> is a better alternative to Norton Ghost</li>
        <li><span class="red-text">GParted</span> is like Partition Magic
            <ul>
                <li class="justify">unlike it's PM Windows-only counterpart GParted supports alot more file systems and from talking to alot of technicians who are better then I am <span class="italics">(yeah, there are people smarter than me ... hardy har har<img src="../smiles/funny/tease.gif" width="57" height="55" alt="teasing smile" />... I admit it )</span>, they all use GParted instead of Partition Magic too </li>
            </ul>
        </li>
    </ul>
    <p class="justify">Remember if you get a bootable CD with either <span class="red-text">PartImage</span> or <span class="red-text">GParted</span> on them ... YOU DON'T HAVE TO USE LINUX necessarily ... meaning you can adjust and change a bunch of NTFS partitions with a bootable copy of GParted, and install Windows only. ... Don't think &quot;I have to install full blown Linux to use either of these </p>
    <p class="justify">I hope to have a review of PartImage backing up Windows NTFS up soon, so you all can know if that's as good as I think it is. </p>
    </div>


    </div> <!-- closes primary-content class -->
</div> <!-- closes main-section class -->

<?php require __DIR__ . '/../../modules/tech/baseTechFooter.tpl'; ?>