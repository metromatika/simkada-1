type Province struct {
    ID          uint        `gorm:"primaryKey" json:"id"`
    Name        string      `gorm:"not null" json:"name"`
    Regencies   []Regency   `gorm:"foreignKey:ProvinceID" json:"regencies"`     // Province has many Regencies
    gorm.Model
}
type Regency struct {
    ID          uint        `gorm:"primaryKey" json:"id"`
    Name        string      `gorm:"not null" json:"name"`
    ProvinceID  uint        `gorm:"not null"`
    Province    Province    `gorm:"constraint:OnUpdate:CASCADE,OnDelete:CASCADE;"`  // Regency belongs to a Province
    Districts   []District  `gorm:"foreignKey:RegencyID" json:"districts"`          // Regency has many Districts
    gorm.Model
}
type District struct {
    ID          uint        `gorm:"primaryKey" json:"id"`
    Name        string      `gorm:"not null" json:"name"`
    RegencyID   uint        `gorm:"not null"`
    Regency     Regency     `gorm:"constraint:OnUpdate: CASCADE, OnDelete:CASCADE;"`    // District belongs to a Regency
    Villages    []Village   `gorm:"foreignKey:DistrictID" json:"villages"`              // District has many Villages
    gorm.Model
}
