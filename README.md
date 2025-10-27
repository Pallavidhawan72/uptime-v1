# BrickMMO Uptime Monitor v1

A comprehensive uptime monitoring application for BrickMMO services built with PHP, MySQL, and W3.CSS.

## Features

### 🔍 Monitoring Capabilities
- **Uptime Monitoring**: Check HTTP/HTTPS endpoints every 5 minutes
- **Response Time Tracking**: Monitor page load times
- **Status Code Monitoring**: Track HTTP response codes
- **Error Detection**: Detect and log page errors
- **Multi-Asset Support**: Monitor multiple websites/services

### 📊 Dashboard & Reports
- **Real-time Dashboard**: View current status of all monitored assets
- **Detailed Asset Pages**: Individual asset monitoring with historical data
- **Uptime Percentages**: 24h, 7-day, and 30-day uptime statistics
- **Performance Metrics**: Average, minimum, and maximum response times
- **Downtime Reports**: Historical downtime events and error logs

### ⚙️ Admin Panel
- **Asset Management**: Add, edit, and delete monitored assets
- **Admin Authentication**: Secure login system
- **System Reports**: Comprehensive reporting and analytics
- **Manual Checks**: Run uptime checks on-demand
- **Data Cleanup**: Automatic and manual old data cleanup

### 🎨 Modern Interface
- **W3.CSS Framework**: Clean, responsive design
- **Font Awesome Icons**: Professional iconography
- **Mobile Responsive**: Works on all devices
- **Real-time Updates**: Auto-refresh functionality

## Installation

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)
- cURL extension enabled

### Setup Steps

1. **Clone or download** this repository to your web server
2. **Configure database** settings in `config.php`
3. **Run setup script**:
   ```bash
   php setup.php
   ```
4. **Set up automated monitoring** (see Cron Job Setup below)
5. **Access the application** in your web browser

### Configuration

Edit `config.php` to match your environment:

```php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'brickmmo_uptime');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');

// Application configuration
define('SITE_URL', 'http://uptime.brickmmo.com');
define('CHECK_INTERVAL', 300); // 5 minutes
define('TIMEOUT', 30); // HTTP timeout
```

## Usage

### Default Login
- **Username**: `admin`
- **Password**: `admin123`

**⚠️ Change the default password after first login!**

### Adding Assets
1. Login to the admin panel
2. Go to "Manage Assets"
3. Click "Add Asset"
4. Enter asset name and URL
5. Save and start monitoring

### Viewing Reports
- **Dashboard**: Overview of all assets
- **Asset Details**: Click any asset for detailed metrics
- **Admin Reports**: Comprehensive analytics in admin panel

## File Structure

```
uptime-v1/
├── config.php              # Configuration settings
├── index.php               # Main dashboard
├── asset.php               # Individual asset details
├── monitor.php             # Monitoring class
├── cron.php                # Automated monitoring script
├── setup.php               # Database setup script
├── database.sql            # Database schema
├── admin/                  # Admin panel
│   ├── index.php          # Admin dashboard
│   ├── login.php          # Admin login
│   ├── assets.php         # Asset management
│   ├── reports.php        # Reports
│   └── settings.php       # System settings
└── includes/               # Shared templates
    ├── header.php
    └── footer.php
```

## Database Schema

### Tables
- **assets**: Monitored websites/services
- **uptime_checks**: Historical monitoring data
- **page_errors**: Detected page errors
- **performance_metrics**: Performance data
- **screenshots**: Screenshot storage (future)
- **admins**: Admin user accounts

### Data Retention
- Monitoring data is automatically cleaned up after 30 days
- Manual cleanup available in admin settings

## API Endpoints

The system includes basic endpoints for monitoring:

- `GET /`: Main dashboard
- `GET /asset.php?id={id}`: Asset details
- `POST /admin/`: Admin actions

## Customization

### Styling
- Modify W3.CSS classes in templates
- Add custom CSS in header.php
- Customize colors and layout

### Monitoring Logic
- Edit `monitor.php` for custom checks
- Add new metric types
- Implement custom alerting

### Reporting
- Extend `reports.php` for custom reports
- Add new statistics and charts
- Export functionality

## Troubleshooting

### Common Issues
1. **Database connection failed**: Check config.php settings
2. **Cron job not running**: Verify cron setup and PHP path
3. **Assets not updating**: Check cron job logs
4. **Permission errors**: Ensure web server has write permissions

### Debug Mode
Enable PHP error reporting in `config.php`:
```php
error_reporting(E_ALL);
ini_set('display_errors', 1);
```

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## License

This project is part of the BrickMMO ecosystem. See the main BrickMMO documentation for licensing information.

## Support

For support and questions:
- GitHub Issues: [BrickMMO/uptime-v1](https://github.com/BrickMMO/uptime-v1/issues)
- BrickMMO Website: [https://brickmmo.com](https://brickmmo.com)

## Roadmap

### Future Enhancements
- [ ] Screenshot monitoring
- [ ] Email/SMS alerts
- [ ] Webhook notifications
- [ ] Advanced performance metrics
- [ ] Geographic monitoring
- [ ] Integration with BrickMMO Console
- [ ] API for external integrations
- [ ] Mobile app
- [ ] Custom dashboards
- [ ] Incident management

---

Built with ❤️ for the BrickMMO community
