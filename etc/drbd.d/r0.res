resource r0 {
	device	/dev/drbd0;
	disk	/dev/mmcblk0p3;
	meta-disk internal;

	on rasp-master.hhs.lan {
		address 192.168.4.3:7788;
	}
	on rasp-slave.hhs.lan {
		address 192.168.4.4:7788;
	}
}
