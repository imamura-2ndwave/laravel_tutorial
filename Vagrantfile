Vagrant.configure("2") do |config|
  config.vm.box = "2ndwave/tutorial"

  ### ホスト名の設定
  config.vm.hostname = "laravel.dev"

  ### ネットワーク設定
  config.vm.network "private_network", ip: "192.168.33.10"
  config.vm.network "public_network", use_dhcp_assigned_default_route: true, bridge: "en0: Wi-Fi (AirPort)"

  ### 共有フォルダ設定

  # 共有フォルダ(デフォルトの設定を無効化)
  config.vm.synced_folder ".", "/vagrant", disabled: true
  # 共有フォルダ(Laravel)
  config.vm.synced_folder ".", "/var/www/laravel", create: true, owner: 'apache', group: 'apache', mount_options: ['dmode=777', 'fmode=777']

end
